<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;


class PizzaController extends Controller
{
    //to make /show /index /pizzas pages to not be shown
//        public function __construct()
//        {
//            $this->middleware('auth');
//        }

    // index() - naming convention about / route

    public function index(){
       // $name = request('name'); // take from url , this is query string pizza.com/pizzas?name='John'

        $pizzas = Pizza::all();// take all records from model, because in model we can get records from db
       // $pizzas = Pizza::orderBy('name','desc')->get(); //get pizza ordered by name in desccending order
       // $pizzas = Pizza::where('type','hawaiian')->get(); //get all pizzas where type is hawaiian
       // $pizzas = Pizza::latest()->get(); //get all pizzas
        return view('pizzas.index',
            ['pizzas' => $pizzas]);
    }

    //naming convention about www.pizas/{id}
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show',['pizza' => $pizza]);
    }

    //create function
    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        //create new instance of Pizza Method
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save(); //save to db
        return redirect('/')->with('mssg', 'Thanks for your order'); // when we submit form to redirect to home screen
        //->with is a session data, we can access then

        //take data from the form,
        //error_log(request('name'));
        //error_log(request('type'));
        //error_log(request('base'));
        //error_log($pizza);
    }

    //funnction for deleting pizza
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);//find pizza with $id
        $pizza->delete();//delete piza from db
        return redirect('/pizzas');
    }
}
