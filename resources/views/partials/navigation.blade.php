 <!-- Main Nav Bar -->
 <nav class="navbar navbar-expand-lg bg-dark text-white">
  <a class="navbar-brand text-light" href="./">E-Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-light bg-dark" id="navbarNavDropdown">
    <ul class="navbar-nav d-flex text-light bg-dark ml-auto">
      <li class="nav-item active dropdown text-white px-2">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
              <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route( 'login') }}">Sign In</a>
            <a class="dropdown-item" href="{{ route( 'register') }}">Join Up</a>
            @auth
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            @endauth
          </div>
        </li>
      <li class="nav-item px-2 text-white">
        <a class="nav-link text-light" href="{{ route( 'products.productFavorites') }}"><i class="fas fa-gift"></i></a>
      </li>
      <li class="nav-item px-2 text-white">
        <a class="nav-link text-light" href="{{ route( 'shoppingCarts.cart') }}"><i class="fas fa-shopping-cart"></i></a>
      </li>
    </ul>
  </div>
</nav>
<!-- Product Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Shop</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        New
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ route( 'products.newProducts') }}">Newest Jackets</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Clothing
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ route( 'products.index') }}">Jackets</a>
      </div>
    </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Brands
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="{{ route( 'products.productBrandArcteryx') }}">Arcteryx</a>
      <a class="dropdown-item" href="{{ route( 'products.productBrandEddieBauer') }}">Eddie Bauer</a>
      <a class="dropdown-item" href="{{ route( 'products.productBrandNike') }}">Nike</a>
      <a class="dropdown-item" href="{{ route( 'products.productBrandNorthFace') }}">North Face</a>
    </div>
  </li>
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sales
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ route( 'products.productSales') }}">Current Jacket Sales</a>
      </div>
    </li>
</ul>
</div>
</nav>