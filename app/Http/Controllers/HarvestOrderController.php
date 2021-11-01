<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HarvestOrder;

class HarvestOrderController extends Controller
{
    //
    public function store(Request $request){
        $harvestorder = new HarvestOrder();
        $harvestorder->idHarvest = $request->idHarvest;
        $harvestorder->idOrder = $request->idOrder;

        $harvestorder->save();
    }
}
