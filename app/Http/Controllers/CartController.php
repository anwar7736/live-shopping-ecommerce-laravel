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
        return view('cartlist');
    }

    public function store(Request $request)
    {
        $id=$request->product;
        $size=$request->variation;
        $qty=$request->qty;

        $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter_by_id/'.$id);
        $data = $response->json();
        $product = $data['product'];

        $cart = session()->get('cart', []);

        $stock=$this->util->checkProductStock($id, $size);

        if($stock < $qty){
            return response()->json(['success'=>false,'msg'=>'Stock '.$stock.'pcs available!']);
        }
  
        if(isset($cart[$id])) 
        {
            $new_stock=$cart[$id]['quantity']+1;

            $stock=$this->util->checkProductStock($id, $size);

            if($stock < $new_stock){
                return response()->json(['success'=>false,'msg'=>'Stock '.$stock.'pcs available!']);
            }

            $cart[$id]['quantity'] = $new_stock;
            $cart[$id]['size'] = $size;
        } 
        
        else {
            $cart[$id] = [
                "name" => $product['product'] ?? $product['default_name'],
                "quantity" => $qty,
                "price" => $product['regular_price'] ?? $product['regular_price'],
                "discount" => 0,
                "size" => $size,
                "image" => $product['image_url'],
            ];
        }
        session()->put('cart', $cart);

        $total_item=getTotalCart();
        return response()->json(['success'=>true,'msg'=>'Product added to cart successfully!', 'item'=>$total_item]);
    }

    public function increment($id)
    {

    }    
    
    public function decrement($id)
    {

    }    
    
    public function remove($id)
    {

    }

}
