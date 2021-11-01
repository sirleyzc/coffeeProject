<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $customer = Customer::select('id','name','phone')
        ->orderBy('name','asc')
        ->get();
        return [
            'cus'=>$customer
        ];
    }
    
    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->addr;
        $customer->phone = $request->phone;
        
        $customer->save();
    }

    public function update(Request $request){
        $customer = Customer::findOrFail($request->id);
        $customer->name = $request->name;
        $customer->address = $request->addr;
        $customer->phone = $request->phone;

        $customer->save();
    }

    public function destroy(Request $request){
        $customer = Customer::findOrFail($request->id);
        $customer->delete();
    }
}
