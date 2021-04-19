<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Get all the products from the database
        $products = Product::all();

        return view('shop.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_title' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required',
            'product_cat' => 'required',
            'product_pic' => 'required'
        ]);

        if($request->product_pic){
            $img_path = $request->product_pic->store('product_pics', 'public');
        }

        Product::create([
            'product_title' => $request->product_title,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_cat' => $request->product_cat,
            'product_pic' => $img_path ?? null
        ]);

        return redirect()->route('shop.index')->with('success', 'Je product is succesvol toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
