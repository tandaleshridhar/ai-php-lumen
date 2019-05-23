<?php

namespace App\Http\Controllers;
use App\Taluka;
use Illuminate\Http\Request;

class TalukaController extends Controller 
{
  public function index()
  {
    $taluka = Taluka::all();
    return response()->json($taluka, 200);
  }

  public function create(Request $request)
  {
    $taluka = new Taluka();
    
    $taluka->district_id = $request->district_id;
    $taluka->name = $request->talukaName;
    
    $taluka->save();

    return response()->json($taluka, 200);
  }  
}