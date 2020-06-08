@extends('layout')
 
@section('title', 'Admin Dashboard')
 
@section('content')
 

<nav class="navbar navbar-expand-lg bg-secondary text-white">
    <a class="navbar-brand text-white" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage Orders
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route( 'admin.activeOrders') }}">Active Orders</a>
            <a class="dropdown-item" href="{{ route( 'admin.completedOrders') }}">Completed Orders</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route( 'admin.adminProducts') }}">View all Products</a>
            <a class="dropdown-item" href="{{ route( 'admin.newProduct') }}">Add new Product</a>
          </div>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route( 'admin.allUsers') }}">View all Users</a>
        </div>
      </li>

    </ul>
    </div>
    </nav>
 
@endsection 
