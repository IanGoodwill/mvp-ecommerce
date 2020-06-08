@extends('layout')

@section('title')
Add New Product
@endsection

@section('content')

<div class="container">
    <form method="post" action="{{ route( 'products.store') }}" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group container">
                @csrf 
                <div class="col">
                    <div class="form-group">
                        <label for="name">
                        <strong> Product name: </strong>
                        <br>
                        <input name="name" type="text" id="name" value="Enter Product Name..." cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="description">
                        <strong> Product description: </strong>
                        <br>
                        <textarea name="description" id="description" cols="30" rows="10">Enter Product description...</textarea>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">
                    <strong> Product Image: </strong>
                    <br>
                    <input type="file" name="image" id="image" class="form-control">
                    </label>
                </div>

                <div class="form-group">
                    <label for="brand">
                    <strong> Product Brand: </strong>
                    <br>
                    <input name="brand" type="text" id="brand" value="Enter Product Brand..." cols="30" rows="10">
                    </label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="price">
                        <strong> Product price: </strong>
                        <br>
                        <input name="price" type="number" class="mx-2" step="any" id="price" value="" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="small_units">
                        <strong> Small Units:  </strong>
                        <br>
                        <input name="small_units" class="mx-2" type="number" step="1" id="small_units" value="" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="medium_units">
                        <strong> Medium Units:  </strong>
                        <br>
                        <input name="medium_units" class="mx-2" type="number" step="1" id="medium_units" value="" cols="30" rows="10">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="large_units">
                        <strong> Large Units:  </strong>
                        <br>
                        <input name="large_units" class="mx-2" type="number" step="1" id="large_units" value="" cols="30" rows="10">
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-success btn-customized align-bottom" type="submit" value="Create New Product">    
                </div>
            </div>
        </div>
    </form>

@endsection 