
<!-- Main Nav Bar -->
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <a class="navbar-brand text-light" href="./">E-Store</a>

<nav class="navbar navbar-expand-lg bg-dark text-white">
    <a class="navbar-brand text-light" href="#">E-Store</a>

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
            </div>
          </li>
        <li class="nav-item px-2 text-white">
<<<<<<< HEAD
          <a class="nav-link text-light" href="#"><i class="fas fa-gift"></i></a>
=======
          <a class="nav-link text-light" href="{{ route( 'products.productFavorites') }}"><i class="fas fa-gift"></i></a>

        <li class="nav-item dropdown text-white px-2">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Sign In</a>
              <a class="dropdown-item" href="#">Join Up</a>
            </div>
          </li>
        <li class="nav-item px-2 text-white">
          <a class="nav-link text-light" href="#"><i class="fas fa-gift"></i></a>

>>>>>>> eabf3194d15e31e43a693c88cfa98fab46b80e52
        </li>
        <li class="nav-item px-2 text-white">
          <a class="nav-link text-light" href="{{ route( 'products.productFavorites') }}"><i class="fas fa-shopping-cart"></i></a>
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

          <a class="dropdown-item" href="#">Newest Jackets</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clothing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="{{ route( 'products.index') }}">Jackets</a>

          <a class="dropdown-item" href="#">Jackets</a>

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

        <a class="dropdown-item" href="#">Arcteryx</a>
        <a class="dropdown-item" href="#">Eddie Bauer</a>
        <a class="dropdown-item" href="#">Nike</a>
        <a class="dropdown-item" href="#">North Face</a>

      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="{{ route( 'products.productSales') }}">Current Jacket Sales</a>

          <a class="dropdown-item" href="#">Current Jacket Sales</a>

        </div>
      </li>
  </ul>
</div>
</nav>