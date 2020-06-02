@extends('layout')

@section('title')
All Products
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="card-columns">
    @foreach($products as $product)
   
        <div class="card">
            <div class="card-body">
                <a data-product-id="{{ $product->id }}" class="nav-link" href="{{ route('products.show', $product->id ) }}">
                    <figure>
                        <img class="img-responsive card-img-top" alt="{{$product->name}}" style="max-height: 400px;" src="product-images/{{$product->image}}">
                    </figure>
                </a>
                <h4 class="text-dark">
                    {{ $product->name }} 
                </h4>
                <p class="card-text text-dark">
                    {{ $product->description }}    
                </p>              
                <p class="text-dark d-inline">
                    <strong>${{ $product->price }}</strong>    
                </p>
                <a class="text-dark float-right d-inline" href="{{ route( 'products.productFavorites') }}">
                    <i class="fas fa-gift d-inline"></i>
                </a>
            </div>            
        </div>

    @endforeach
    </div>
  {{ $products->links() }}
</div>
@endsection 