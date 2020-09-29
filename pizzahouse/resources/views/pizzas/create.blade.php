@extends('layouts.app')

{{--This section is does not print by defoult , by using yield on layout.blade.php file is printed there and this page is called by @extends to be shown on /pizzzas file--}}
@section('content')
       <div class="wrapper create-pizza">
           <h1>Create a New Pizza</h1>
           <form action="/pizzas" method="POST">
            @csrf
               <label for="name">Your name:</label>
               <input type="text" id="name" name="name">

               <label for="type">Choose pizza type:</label>
               <select name="type" id="type">
                   <option value="margarita">Margarita</option>
                   <option value="hawaiian">Hawaiian</option>
                   <option value="veg supreme">Veg Ssupreme</option>
                   <option value="volcano">Volcano</option>
               </select>

               <label for="type">Choose base type:</label>
               <select name="base" id="base">
                   <option value="chesy crust">Cheesy Crust</option>
                   <option value="garlic crust">Garlick Crust</option>
                   <option value="thin & crispy">Thin & crispy</option>
                   <option value="thick">Thick</option>
               </select>

               <fieldset>
                   <label>Extra toppings:</label> <br>
                   <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
                   <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
                   <input type="checkbox" name="toppings[]" value="garlick"> Garlick <br>
                   <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
               </fieldset>

               <input type="submit" value="Order Pizza">
           </form>
       </div>
@endsection
