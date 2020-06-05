@extends('layout')
 
@section('title', 'Confirmation')
 
@section('content')
 
<div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
    <h2>
        <span class="title"><strong>Thank You!</strong></span><br>
        <span class="medium-text">Your order has been placed.</span><br>
        <router-link :to="{name: 'userboard'}" class="small-link">
            See your orders
        </router-link>
    </h2>
</div>
 
@endsection 
