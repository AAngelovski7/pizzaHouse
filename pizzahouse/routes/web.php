<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //on / - addres we return welcome.blade.php page
});
//run in order of preference
//calling index() from PizzaControler , namesto da koristime callback function
//name is used in html code, to go zamenvit /pizzas/create in the url in a tag
Route::get('/pizzas','PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create','PizzaController@create')->name('pizzas.create');
Route::get('/pizzas/{id}','PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::post('/pizzas','PizzaController@store')->name('pizzas.store');
Route::delete('/pizzas/{id}','PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');
//Route::get('/pizzas', function () {
    //return view('pizzas'); // on /pizzas url return index.blade.php file
    // return 'pizzas'; //on this way return only string pizzas to /pizzas url
    //return ['name'=>'veg pizzas','basse'=>'classic']; // on this type return array in json format
    //return view('pizzas',['type'=>'hawaiian']); // on this way on index.blade.php pass thiss aray and data from this array we can use in this file
    //return view('pizzas',['type'=>'hawaiian','base'=>'chessy crust']);

//    $pizza = ['type' => 'hawaiian',
//        'base' => 'cheesy crust',   //create a $pizza array for function view() to not be too long + to have better format
//        'price' => '10'];
//
//    $pizzas = [
//        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
//        ['type' => 'volcano', 'base' => 'garlic crust'],
//        ['type' => 'veg supreme', 'base' => 'thin & crispy']
//    ];
//    //return view('pizzas',['pizzas' =>$pizzas]); // reutn on array pizzas value of $pizzas
//    $name = request('name'); // take from url , this is query string pizza.com/pizzas?name='John'
//    return view('pizzas',
//        ['pizzas' => $pizzas,
//        'name' => $name]); // ili direktno 'name' => request('name');
//});

//Route::get('/pizzas/{id}', function () { //in function $id is a $id of our ulr that we take , id in fucnction need to be if we cratee there function
    //return view('details',['id' => $id]);
//});

//first we register and that registered acount shoud be a admin of the page
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
