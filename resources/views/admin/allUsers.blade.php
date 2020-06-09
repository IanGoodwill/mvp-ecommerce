@extends('layout')
 
@section('title', 'Admin All Users')
 
@section('content')
 
@foreach($users as $user)
<div class="card" style="width: 36rem;">

    <ul>    
        <div class="card-body"> 
            <li>
                <h6>
                    <strong> {{ $user->name }} </strong>
                </h6>
                <p>
                   <strong> Email: </strong>  {{ $user->email}}
                </p>
                <p>
                    Created At: <strong>{{ $user->created_at}}</strong>
                </p>
            </li>
        </div>       
    </ul>
</div>
@endforeach
 
@endsection 
