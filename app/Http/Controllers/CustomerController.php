<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->addr;
        $customer->phone = $request->phone;
        
        $customer->save();
    }
}
