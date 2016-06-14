<?php

namespace App\Http\Controllers;

use App\Customer as Customer;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    //
    public function show(){
    
	$customer = Customer::find(1);
	echo "hello my name ". $customer->name;

    }

    public function render()
    {
    	# code...

	$customers = Customer::all();
	$data = array(
		'customers' => $customers
		);

	return view('firstView', $data);
    }
}
