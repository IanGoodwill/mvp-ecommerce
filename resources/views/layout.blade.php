<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Store</title>
        <meta name="description" content="An mvp of an ecommerce.Create an account, shop, add to cart, and checkout.">
        <meta name=”robots” content="index, follow">
        <link rel="shortcut icon" type="image/png" href="{{URL('/product-images/shop-favicon.png')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" type ="text/javascript" defer ></script>
        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/901edefaa6.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <body>
        @include('partials.navigation')
        <h1>
            @yield('title')
        </h1>

        @yield('js')

        @yield('content')
        <footer class="text-center">
            <p>E-Store &copy; Copyright 2020</p>
         </footer>
         @yield('scripts')
    </body>

</html>