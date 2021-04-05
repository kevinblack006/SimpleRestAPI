<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = Product::all('id','Name','Description','Price');
        foreach ($allProducts as $index => $product)
        {
            $productImages = DB::table('images')
                ->select('id','Image')
                ->where('product_id', '=', $product['id'])
                ->get();
            

            $allProducts[$index]['Images'] = $productImages;
        }
        return $allProducts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            "Name" => "required|max:100",
            "Description" => "required|max:1000",
            "Price" => "required|numeric",
        ]);

        $product = Product::create([
            'Name' => $request['Name'],
            'Description' => $request['Description'],
            'Price' => $request['Price']
        ]);

        return $this->show($product);
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productImages = DB::table('images')
                ->select('id','Image')
                ->where('product_id', '=', $product['id'])
                ->get();
            

        $product['Images'] = $productImages;
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'Name' => $request['Name'],
            'Description' => $request['Description'],
            'Price' => $request['Price'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
