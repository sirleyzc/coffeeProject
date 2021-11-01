<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetHarvest;

class DetHarvestController extends Controller
{
    //
    public function store(Request $request){
        $detHarvest = new detHarvest();
        $detHarvest->timHarvest = $request->timHarv;
        $detHarvest->kilos = $request->kilos;
        $detHarvest->timValue = $request->timVal;

        $detHarvest->idHarvest = $request->idHarv;

        $detHarvest->save();
    }
}
