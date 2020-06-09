@extends('layout')

@section('title')
Edit Product
@endsection

@section('content')

<div class="container">
    <form method="post" action="{{ route( 'products.update', $product->id) }}">
        <div class="form-row">
            <div class="form-group container">
                @csrf 
                @method('PATCH')
                <div class="col">
                    <div class="form-group">
                        <label for="name">
                        <strong> Product name: </strong>
                        <br>
                        <input name="name" type="text" id="name" value="{{ $product->name }}" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="description">
                        <strong> Product description: </strong>
                        <br>
                        <textarea name="description" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="brand">
                    <strong> Product Brand: </strong>
                    <br>
                    <input name="brand" type="text" id="brand" value="{{ $product->brand }}" cols="30" rows="10">
                    </label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="price">
                        <strong> Product price: </strong>
                        <br>
                        <input name="price" type="number" class="mx-2" step="any" id="price" value="{{ $product->price }}" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="small_units">
                        <strong> Small Units:  </strong>
                        <br>
                        <input name="small_units" class="mx-2" type="number" step="1" id="small_units" value="{{ $product->small_units }}" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="medium_units">
                        <strong> Medium Units:  </strong>
                        <br>
                        <input name="medium_units" class="mx-2" type="number" step="1" id="medium_units" value="{{ $product->medium_units }}" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="large_units">
                        <strong> Large Units:  </strong>
                        <br>
                        <input name="large_units" class="mx-2" type="number" step="1" id="large_units" value="{{ $product->large_units }}" cols="30" rows="10">
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Product">    
                </div>
            </div>
        </div>
    </form>
     
    <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf 
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Delete Product">
    </form>    
</div>
  
@endsection

