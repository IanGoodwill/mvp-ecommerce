@extends('layout')

@section('title')
Individual Product    
@endsection

@section('content')
<div id="app">
  <div class="row justify-content-md-center parent-container">
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
            <a class="popup-link">
              <figure class="mx-0">
                <img class="img-responsive card-img-top" alt="{{$product->name}}"  src="../product-images/{{$product->image}}">
              </figure>
            </a>
            <p class="card-text"> {{ $product->description }}</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <p class="card-text">  <strong>Price: ${{ $product->price }}</strong></p>
          
            <sizing-form product-id="{{ $product->id }}"> 
               @csrf  @method('PATCH')
            </sizing-form>
             
            <favorites :product={{ $product->id }} :isFavorited={{ $product->favorited() ? 'true' : 'false' }}>
            </favorites> 

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

                                                        