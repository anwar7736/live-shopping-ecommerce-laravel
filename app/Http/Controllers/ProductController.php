<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $product_id = request()->get('id');
        $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter_by_id/'.$product_id);
        $product = $response->json();
        return view('product.product_details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter_by_id/'.$id);
        $product = $response->json();
        if(request()->ajax())
        {
            $view = view('components.quick_modal', compact('product'))->render();
            return response()->json(['success'=>true, 'view'=> $view]);
        }

        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }    
    
    public function productByCategory()
    {
        $category_id = request()->get('id');
        $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter_by_category/'.$category_id);
        $products = $response->json();
        return view('product.category_product', compact('products'));
    }

    public function searchProduct()
    {
        $query = request()->get('query');
        $response = Http::get('https://advertbangladesh.com/testpos/api/product_search/'.$query);
        $products = $response->json();
        return view('product.search_item', compact('products'));
    }
}
