@extends('layout')

@section('title')
Individual Product    
@endsection

@section('content')
<div class="row justify-content-md-center">
  <a class="nav-link" href="{{ route('products.productSales') }}">
    <figure>
      <img class="img-responsive img-fluid"  alt="advertisment" src="{{URL('/product-images/banner-purple.png')}}">
    </figure>
  </a>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center"> {{ $product->name }} </h5>
          <figure class="mx-0">
            <img class="img-responsive card-img-top" alt="{{$product->name}}"  src="../product-images/{{$product->image}}">
          </figure>
            <p class="card-text"> {{ $product->description }}</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <p class="card-text">  <strong>Price: ${{ $product->price }}</strong></p>
          <div id="app">
            <sizing-form product-id="{{ $product->id }}"> </sizing-form>
          </div>
        </div>
      </div>
    </div>
    </div>  
  </div>
  <a class="nav-link  mx-auto text-center" href="./">
    <button type="button" class="btn btn-primary">Back</button>
  </a>
</div>      
@endsection

                                                        