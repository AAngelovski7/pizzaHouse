@extends('layouts.app')

{{--This section is does not print by defoult , by using yield on layout.blade.php file is printed there and this page is called by @extends to be shown on /pizzzas file--}}
@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} </a></h4>
        </div>
    @endforeach
</div>


@endsection
