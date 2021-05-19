@extends('layouts.navigation')

@section('title', 'козина')

@section('content')

    <div>
        <p> {{ \Cart::session($_COOKIE['cart_id']) }}</p>
    </div>



@endsection
