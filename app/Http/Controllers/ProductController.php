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
        $products = Product::query()
        ->orderBy('products.id', 'desc')
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
        $products = Product::query()
        ->orderBy('products.created_at', 'desc')
        ->simplePaginate(10);

        return view('products.newProducts', compact('products'));
    }

    
    /**
     * Display a list of products by brand.
     */
    public function productBrandArcteryx()
    {
        $products = Product::query()->where('brand', '=', 'Arcteryx')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandArcteryx', compact('products'));
    }

    public function productBrandEddieBauer()
    {
        $products = Product::query()->where('brand', '=', 'Eddie Bauer')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandEddieBauer', compact('products'));
    }

    public function productBrandNike()
    {
        $products = Product::query()->where('brand', '=', 'Nike')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandNike', compact('products'));
    }

    public function productBrandNorthFace()
    {
        $products = Product::query()->where('brand', '=', 'North Face')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productBrandNorthFace', compact('products'));
    }

    /**
     * Display a list of products on sale.
     */
    public function productSales()
    {
        $products = Product::query()->where('sale', '=', 'true')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productSales', compact('products'));
    }

      /**
     * Display a list of products that have been favorited.
     */
    public function productFavorites()
    {
        $products = Product::query()->where('favorite', '=', 'true')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(10);

        return view('products.productFavorites', compact('products'));
    }

    
 
}
