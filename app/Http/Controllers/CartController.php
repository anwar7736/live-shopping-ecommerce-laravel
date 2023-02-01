<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Utils\Util;

class CartController extends Controller
{
    public function __construct(Util $util){

        $this->util=$util;
    }

    public function index()
    {
    //    return session()->put('cart', []);
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function store(Request $request)
    {
        $id=$request->product;
        $size=$request->variation;
        $qty=$request->qty;

        $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter_by_id/'.$id);
        $data = $response->json();
        $product = $data['product'];
        $variation = $product['variation'];
        $variations = $data['variations'];

        $cart = session()->get('cart', []);

        $stock=$this->util->checkProductStock($id, $size);

        if($stock < $qty){
            return response()->json(['success'=>false,'msg'=>'Product '.$stock.' pcs available!']);
        }
  
        if(isset($cart[$id])) 
        {
            $new_stock=$cart[$id]['quantity']+1;

            $stock=$this->util->checkProductStock($id, $size);

            if($stock < $new_stock){
                return response()->json(['success'=>false,'msg'=>'Product '.$stock.' pcs available!']);
            }

            $cart[$id]['quantity'] = $new_stock;
            $cart[$id]['size'] = $size ?? '';
        } 
        
        else {
            $cart[$id] = [
                "name" => $product['product'] ?? $product['default_name'],
                "quantity" => $qty,
                "type" => $product['type'],
                "regular_price" => $product['regular_price'],
                "default_price"=> $variation['default_sell_price'],
                "size" => $size,
                "sizes" => $variations,
                "image" => $product['image_url'],
            ];
        }
        session()->put('cart', $cart);

        $total_item = getTotalCart();
        $cart_items = getCartItems();
        $view = view('components.checkout_modal', compact('cart_items'))->render();
        return response()->json(['html'=>$view, 'success'=>true,'msg'=>'Product added to cart successfully!', 'item'=>$total_item]);
    }

    public function edit($id)
    {
        $new_qty = request()->get('quantity');
        $cart = session()->get('cart', []);
        $stock =  $this->util->checkProductStock($id, $cart[$id]['size']);
        if($new_qty > $stock)
        {
            return response()->json(['success' => false, 'msg'=> 'Product '.$stock.' pcs available']);
        }

        $cart[$id]['quantity'] = $new_qty;
        session()->put('cart', $cart);

        return response()->json(['success' => true, 'msg'=> 'Product quantity updated']);
    }    
       
    
    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $total = getTotalCart();

        return response()->json(['success' => true, 'msg'=> 'Product removed from cart list', 'item' => $total]);
    }

    public function getCartList()
    {
        $cart_items = session()->get('cart', []);
        $view = view('components.checkout_modal', compact('cart_items'))->render();
        return response()->json(['html'=>$view]);
    }

    public function updateItemSize()
    {
        $id = request()->product;
        $size = request()->size;
        $cart = session()->get('cart', []);
        $stock =  $this->util->checkProductStock($id,  $size);
        if(isset($cart[$id]))
        {
            $cart[$id]['size'] = $size;
            session()->put('cart', $cart);
            return response()->json(['success' => true, 'msg'=> 'Product size updated', 'stock'=>$stock]);
        }
        else{
            return response()->json(['success' => false, 'msg'=> 'Something went wrong!']);
        }
    }

    
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        $empty_size_items = [];
        $stock_alert = [];
        foreach($cart as $key=>$item)
        {   
            
            $stock=$this->util->checkProductStock($key, $item['size']);

            if($item['type'] == 'variable' && $item['size'] == '')
            {
                if(!in_array( $key, $empty_size_items))
                {
                    array_push($empty_size_items, $key);
                }
            }
            else{

                    array_splice($empty_size_items, $key, 1);
                }
            
            if($stock < $item['quantity'])
            {
                $stock_alert[] = [
                    'product' => $key,
                    'stock' => $stock
                ];
            }
        }

        if(count($empty_size_items) > 0)
        {
            return response()->json(['success' => false, 'msg'=> 'Product size is required!']);
        }       
        
        if(count($stock_alert) > 0)
        {
            return response()->json(['success' => false, 'items'=> $stock_alert]);
        }

        if(count($empty_size_items) == 0 && count($stock_alert) == 0)
        {
            $cutomer = [];
            $cutomer['name'] = $request->name;
            $cutomer['phone'] = $request->phone;
            $cutomer['address'] = $request->address;
            $response = Http::post('https://advertbangladesh.com/testpos/api/checkout', [
                'customer' => $cutomer,
                'items' => $cart,
            ]);
    
            $data = $response->json();
            if($data['success'])
            {
                session()->put('cart', []);
                return response()->json(['success' => true, 'msg'=> $data['msg']]);
            }
            else{
                return response()->json(['success' => false, 'msg'=> $data['msg']]);
            }
        }
       
    }

}
