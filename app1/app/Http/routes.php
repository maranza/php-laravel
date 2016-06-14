<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer','CustomerController@show');//just displaying information manually using php.
Route::get('firstView','CustomerController@render');//displaying via view.




//"where" method from the elephant model. used to filter by name
/*Route::get('person',function(){
	$customer = App\Person::where('name','=','john')->first();
	echo "hello my name ". $customer->name;
});*/

//this was just a test to see if it displays you can start by running this method
/*Route::get('test',function(){
	echo "this is a test";
});
*/