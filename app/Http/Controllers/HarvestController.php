<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Harvest;

class HarvestController extends Controller
{
    //
    public function store(Request $request){
        $harvest = new Harvest();
        $harvest->datHarvest = $request->date;
        $harvest->dayValue = $request->dayVal;
        
        $harvest->idEmployee = $request->idEmp;
        $harvest->save();
    }
}
