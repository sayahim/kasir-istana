<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Product::all();

        return view('product.Product', compact('data'));

        // return view('owner.product');
    }    

    public function product_create()
    {

       return view('product.ProductCreate');
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

        $data = new Product();
        $data->name = $request->name;
        $data->code = 123;
        $data->price_buy = $request->price_buy;
        $data->price_sell = $request->price_sell;
        $data->stock = 20;
        $data->category_id = 2;
        $data->image = '';
        $data->description = $request->description;
        $data->save();

        // Product::create($request->all());

        return redirect()->route('product')->with('success', 'Produk berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        //
        return view('products.show',compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // $product = Product::findOrFail($id);

        // return view('product.ProductCreate')->withTask($product);

        return view('product.ProductEdit', compact('product'));


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
    
        $data = Product::findOrFail($id);

        $data->delete();

        return redirect()->route('product')->with('success', 'Berhasil dihapus');

    }
}
