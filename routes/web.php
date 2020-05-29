<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource( 'products', 'ProductController' );

Route::get( 'newProducts', 'ProductController@newProducts' )->name('products.newProducts');

Route::get( 'productBrandArcteryx', 'ProductController@productBrandArcteryx' )->name('products.productBrandArcteryx');

Route::get( 'productBrandEddieBauer', 'ProductController@productBrandEddieBauer' )->name('products.productBrandEddieBauer');

Route::get( 'productBrandNike', 'ProductController@productBrandNike' )->name('products.productBrandNike');

Route::get( 'productBrandNorthFace', 'ProductController@productBrandNorthFace' )->name('products.productBrandNorthFace');

Route::get( 'productSales', 'ProductController@productSales' )->name('products.productSales');

Route::get( 'productFavorites', 'ProductController@productFavorites' )->name('products.productFavorites');

