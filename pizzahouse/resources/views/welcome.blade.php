@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizzahouse.png" alt="">
        <div class="title m-b-md">
            Pizza House <br>
            The North`s Best Pizzas
        </div>
        <p class="mssg">{{session('mssg')}}</p>
    {{-- For name of the pats in the route file - web.php we use route('name') function         --}}
        <a href="{{route('pizzas.create')}}">Order a Pizza</a>
    </div>
</div>
@endsection
