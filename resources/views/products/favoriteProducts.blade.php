@extends('layout')

@section('title')
Favorites
@endsection

@section('content')

@section('content')
@if($product->is_favorite !== true) 

<div class="card-columns">
@foreach($products as $product)
   
    <div class="card">
        <div class="card-body">
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
            <a class="nav-link text-dark float-right" href="{{ route( 'products.productFavorites') }}">
                <i class="fas fa-gift"></i>
            </a>
        </div>
    </div>
@endforeach
</div>
  {{ $products->links() }}
  @endif
@endsection 

@endsection