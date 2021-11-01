<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    //
    public function store(Request $request){
        $payment = new Payment();
        $payment->payValue = $request->value;
        $payment->payDate = $request->date;

        $payment->idEmployee = $request->idEmp;

        $payment->save();
    }
}
