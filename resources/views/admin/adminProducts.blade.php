@extends('layout')

@section('title')
Admin All Products
@endsection

@section('content')

@foreach($products as $product)

<div class="card">
    <div class="card-body">
        <a data-product-id="{{ $product->id }}" class="nav-link" href="{{ route('products.show', $product->id ) }}">
            <figure>
                <img class="img-responsive card-img-top" alt="{{$product->name}}" style="max-height: 50px; width: auto" src="product-images/{{$product->image}}">
            </figure>
        </a>
        <h6 class="text-dark">
            {{ $product->name }} 
        </h6>
        <p class="card-text text-dark">
            <small>{{ $product->description }}</small>    
        </p>              
        <p class="text-dark d-inline">
            <strong>${{ $product->price }}</strong>    
        </p>
       
        <a class="nav-link  mx-auto text-center" href="{{ route('admin.editProduct', $product->id ) }}">
            <button type="button" class="btn btn-primary">Edit product</button>
        </a>    
    </div>
</div>   

@endforeach
{{ $products->links() }}
@endsection

