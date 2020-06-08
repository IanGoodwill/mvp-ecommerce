<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
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

    public function store(Request $request)
    {
        if ( $user = Auth::user() ) {
            $validatedData = $request->validate(array( 
                'name' => 'required|max:100',
                'description' => 'required|max:255',
                'price' => 'required',
                'brand' => 'required',
                'small_units' => 'required',
                'medium_units' => 'required',
                'large_units' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ));

        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('product-images'), $imageName);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->brand = $validatedData['brand'];
        $product->small_units = $validatedData['small_units'];
        $product->medium_units = $validatedData['medium_units'];
        $product->large_units = $validatedData['large_units'];
        $product->image = $imageName;
       
        $product->save();
        
    
         return redirect('/products')->with('success', 'Product saved.');
        }// redirect by default
         return redirect('/products');
    }

    public function update(Request $request, $id)
    {
           
        if ( $user = Auth::user() ) {
            $validatedData = $request->validate(array( 
                'name' => 'required|max:100',
                'description' => 'required|max:255',
                'price' => 'required',
                'brand' => 'required',
                'small_units' => 'required',
                'medium_units' => 'required',
                'large_units' => 'required',
                
            ));
        
        Product::whereId($id)->update($validatedData);

        return view('admin.dashboard');
    }
        return view('products.index');
    }


    public function destroy(Product $product)
    {
        $status = $product->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
        ]);
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
        if ( $user = Auth::user() ) 
        {
        $user = Auth::user();
        }

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
        if(session())
        $cart = session()->get('cart');

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
     * View Admin dashboard.
     */
    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * View Admin active orders.
     */
    public function showActiveOrders()
    {
        return view('admin.activeOrders');
    }

    /**
     * View Admin completed orders.
     */
    public function showCompletedOrders()
    {
        return view('admin.completedOrders');
    }

    /**
     * View Admin list of products.
     */
    public function showAdminProducts()
    {
        $products = Product::query()
        ->orderBy('products.id', 'desc')
        ->simplePaginate(20);

        return view('admin.adminProducts', compact('products'));
    }

    /**
     * View Admin new product.
     */
    public function showNewProduct()
    {
        return view('admin.newProduct');
    }

    /**
     * View Admin Edit product.
     */
    public function showEditProduct( $id )
    {
        $product = Product::findOrFail($id);

        return view('admin.editProduct', compact('product'));
    }

    /**
     * View Admin User List.
     */
    public function showUsers( )
    {
        $users = User::all();

        return view('admin.allUsers', compact('users'));
    }

    /**
     * Add a product to the cart.
     */
    public function addToCart( Request $request )
    {
        //dd(session('mvp_ecommerce_session'));

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
                        "product_id" => $product->id
            
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
            "image" => $product->image,
            "product_id" => $product->id
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

            //return response()->json(['msg' => 'Cart updated successfully', 'data' => $htmlCart, 'total' => $total, 'subTotal' => $subTotal]);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        // dd('$request->product_id');
        
        if($request->product_id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->product_id])) {

                unset($cart[$request->product_id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

            // $htmlCart = view('_header_cart')->render();

            // return response()->json(['msg' => 'Product removed successfully', 'data' => $htmlCart, 'total' => $total]);

            // session()->flash('success', 'Product removed successfully');

            return "Product removed successfully";
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

    /**
     * upload file for new products
     */
    public function formSubmit(Request $request)
    {

        if ( $user = Auth::user() ) 
        {
        // Check image.
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Default image value.
        $fileName = '';

        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('product-images'), $fileName);


        $post = new Post();
        $post->user_id = $user->id;
        $post->content = '';
        $post->picture = $fileName;
        $post->save();
              
        return response()->json(['success'=>'You have successfully upload image.']);
        }
    }

}
