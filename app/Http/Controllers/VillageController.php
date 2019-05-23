<?php

namespace App\Http\Controllers;
use App\Village;
use Illuminate\Http\Request;

class VillageController extends Controller 
{
  public function index()
  {
    $village = Village::all();
    return response()->json($village, 200);
  }

  public function create(Request $request)
  {
    $village = new Village();
    
    $village->taluka_id = $request->talukaId;
    $village->name = $request->villageName;
    
    $village->save();

    return response()->json($village, 200);
  }  
}