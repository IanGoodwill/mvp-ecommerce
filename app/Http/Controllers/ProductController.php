<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of all the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()
        ->orderBy('posts.id', 'desc')
        ->simplePaginate(10);

        return view('products.index', compact('products'));
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view( 'products.show', compact('product') );
    }

    /**
     * Display a list of newest products.
     */
    public function newProducts()
    {
        $products = Product::get()
        ->orderBy('products.created_at', 'desc')
        ->simplePaginate(10);

        return view('products.newProducts', compact('products'));
    }

    
    /**
     * Display a list of products by brand.
     */
    public function productBrandArcteryx()
    {
        $products = DB::table('products')->where('brand', '=', 'Arcteryx')->get()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandArcteryx', compact('products'));
    }

    public function productBrandEddieBauer()
    {
        $products = DB::table('products')->where('brand', '=', 'Eddie Bauer')->get()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandEddieBauer', compact('products'));
    }

    public function productBrandNike()
    {
        $products = DB::table('products')->where('brand', '=', 'Nike')->get()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandNike', compact('products'));
    }

    public function productBrandNorthFace()
    {
        $products = DB::table('products')->where('brand', '=', 'North Face')->get()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandNorthFace', compact('products'));
    }

    /**
     * Display a list of products on sale.
     */
    public function productSales()
    {
        $products = DB::table('products')->where('sale', '=', 'true')->get()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productSales', compact('products'));
    }

    
 
}
