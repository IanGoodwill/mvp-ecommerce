<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;

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
        ->simplePaginate(9);

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

        $user = Auth::user(); 

        return view( 'products.show', compact('product') );
    }

    public function single($id)
    {
        $product = Product::findOrFail($id);

        $user = Auth::user(); 

        return compact('product');
    }

    /**
     * Display a list of newest products.
     */
    public function newProducts()
    {
        $products = Product::query()
        ->orderBy('products.created_at', 'desc')
        ->simplePaginate(9);

        return view('products.newProducts', compact('products'));
    }

    /**
     * Display a list of products by brand.
     */
    public function productBrandArcteryx()
    {
        $products = Product::query()->where('brand', '=', 'Arcteryx')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productBrandArcteryx', compact('products'));
    }

    public function productBrandEddieBauer()
    {
        $products = Product::query()->where('brand', '=', 'Eddie Bauer')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productBrandEddieBauer', compact('products'));
    }

    public function productBrandNike()
    {
        $products = Product::query()->where('brand', '=', 'Nike')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productBrandNike', compact('products'));
    }

    public function productBrandNorthFace()
    {
        $products = Product::query()->where('brand', '=', 'North Face')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productBrandNorthFace', compact('products'));
    }

    /**
     * Display a list of products on sale.
     */
    public function productSales()
    {
        $products = Product::query()->where('is_sale', '=', '1')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productSales', compact('products'));
    }

      /**
     * Display a list of products that have been favorited.
     */
    public function productFavorites()
    {
        $products = Product::query()->where('is_favorite', '=', '1')
        ->orderBy('products.id', 'desc')
        ->simplePaginate(9);

        return view('products.productFavorites', compact('products'));
    }

    /**
     * Favorite a product.
     */
    public function favorite( Product $product )
    {
        if ( $user = Auth::user() )
        $user->favorites()->attach($product->id); // this needs to update is_followed in products database
        
       
        return "success"; 
    }
  
    /**
     * UnFavorite a product.
     */
    public function unFavorite( Product $product )
    {
        if ( $user = Auth::user() )
        $user->favorites()->detach($product->id); 

        return "success"; 
    }

    /**
     * Querie products for sizing form.
     */
    public function sizingForm()
    {
        $products = Product::query()
        ->get();

    }

    /**
     * View Cart.
     */
    public function showCart()
    {
        return view('shoppingCarts.cart');
    }

    /**
     * View Checkout.
     */
    public function showCheckout()
    {
        return view('shoppingCarts.checkout');
    }

    /**
     * View Checkout.
     */
    public function showConfirmation()
    {
        return view('shoppingCarts.confirmation');
    }

    /**
     * Add a product to the cart.
     */
    public function addToCart( Request $request )
    {
        //dd($request->product_id);

        $product = Product::find($request->product_id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');

        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        // return "session check"; 

        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $request->product_id => [
                        "name" => $product->name, // property name does not exist in this collection instance
                        "description" => $product->description,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image,
            
                    ]
            ];
 
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
            // return "session started";
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$request->product_id])) {
 
            $cart[$request->product_id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$request->product_id] = [
            "name" => $product->name,
            "description" => $product->description,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
 
        session()->put('cart', $cart);

        // $htmlCart = view('_header_cart')->render();

        // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);
 
         return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        if($request->product_id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();

           // $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Cart updated successfully', 'data' => $htmlCart, 'total' => $total, 'subTotal' => $subTotal]);

            //session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->product_id])) {

                unset($cart[$request->product_id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

           // $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Product removed successfully', 'data' => $htmlCart, 'total' => $total]);

            //session()->flash('success', 'Product removed successfully');
        }
    }


    /**
     * getCartTotal
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return number_format($total, 2);
    }

}
