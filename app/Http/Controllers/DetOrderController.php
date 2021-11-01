<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetOrder;

class DetOrderController extends Controller
{
    //
    public function store(Request $request){
        $detOrder = new detOrder();
        $detOrder->amount = $request->amount;
        $detOrder->variety = $request->variety;
        $detOrder->loadValue = $request->loadVal;
        $detOrder->description = $request->desc;

        $detOrder->idOrder = $request->idOrder;

        $detOrder->save();
    }
}
