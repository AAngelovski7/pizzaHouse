@extends('layouts.app')

{{--This section is does not print by defoult , by using yield on layout.blade.php file is printed there and this page is called by @extends to be shown on /pizzzas file--}}
@section('content')
   <div class="wrapper pizza-details">
       <h1>Order for {{$pizza->name}}</h1>
       <p class="type">Type - {{$pizza->type}}</p>
       <p class="base">Base - {{$pizza->base}}</p>
       <p class="toppings">Extra toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
   </div>
{{--   Route with name and id as a second parametar--}}
   <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
       @csrf
       @method('DELETE')
       <button>Complete Order</button>
   </form>
   <a href="/pizzas" class="back"><-Back to all pizzas</a>
@endsection
