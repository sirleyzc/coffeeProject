<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function store(Request $request){
        $order = new Order();
        $order->orDate = $request->date;
        $order->totOrder = $request->total;

        $order->idCustomer = $request->idCustomer;

        $order->save();
    }
}
