<?php

namespace App\Http\Controllers;

use App\Product;
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
        $products = Product::get();
        return view('admin/products.index',['products'=>$products]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::insert([
            'name'=>$_POST['name'],
            'name'=>$_POST['name'],
            'id_type'=>$_POST['id_type'],
            'description'=>$_POST['description'],
            'unit_price'=>$_POST['unit_price'],
            'promotion_price'=>$_POST['promotion_price'],
            'image'=>$_POST['image'],
            'new'=>$_POST['new']
        ]);
        $products = Product::get();
        return view('admin/products.index',['products'=>$products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin/products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    $product->name = $request->name;
    $product->id_type = $request->id_type;
    $product->description = $request->description;
    $product->unit_price = $request->unit_price;
    $product->unit_price = $request->unit_price;
    $product->promotion_price = $request->promotion_price;
    $product->image = $request->image;
    $product->new = $request->new;
    $product->save();
    return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index');
    }
}
