@extends('layout')

@section('title')
All Products
@endsection

@section('content')

@foreach($products as $product)

<div class="container">
        <div class="col-6">
            <div class="list-group d-flex flex-row flex-wrap">   
                <ul class="list-unstyled d-flex flex-row flex-wrap">
                    <li class="list-group-item w-75 list-group-item-action">
                        <a data-product-id="{{ $product->id }}" class="nav-link" href="{{ route('products.show', $product->id ) }}">
                            <figure>
                                <img class="img-responsive card-img-top" alt="product image"  src="product-images/{{$product->image}}">
                            </figure>
                        </a>
                        <h4 class="text-dark">
                            {{ $product->name }} 
                        </h4>
                        <p class="card-text text-dark">
                            {{ $product->description }}    
                        </p>
                        <p class="text-dark">
                            <strong>${{ $product->price }}</strong>    
                        </p>
                        <a class="nav-link text-light" href="{{ route( 'products.productFavorites') }}">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
  </div>
</div>
  @endforeach
  {{ $products->links() }}
@endsection 