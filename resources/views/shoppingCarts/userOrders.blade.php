@extends('layout')

@section('title')
All Orders
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div id="app">
        <div class="card-columns">
        @foreach($orders as $order)
   
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
                </div>            
            </div>

        @endforeach
        </div>
    </div>
</div>
@endsection 