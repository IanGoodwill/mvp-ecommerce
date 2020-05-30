@extends('layout')

@section('title')
Individual Product
@endsection

@section('content')
        <a class="nav-link" href="{{ route('products.productSales') }}">
            <figure>
                <img class="img-responsive img-fluid w-100"  alt="advertisment" src="{{URL('/product-images/banner-purple.png')}}">
            </figure>
        </a>

        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center"> {{ $product->name }} </h5>
                  <figure class="mx-0">
                    <img class="img-responsive card-img-top" alt="product image"  src="../product-images/{{$product->image}}">
                </figure>
                  <p class="card-text"> {{ $product->description }}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                 
                  <p class="card-text">  <strong>Price: ${{ $product->price }}</strong>   </p>
                  
                </div>
              </div>
            </div>
            <a class="nav-link" href="./">
                <button type="button" class="btn btn-primary text-center mb-2">Back</button>
            </a>
          </div>
       
@endsection

