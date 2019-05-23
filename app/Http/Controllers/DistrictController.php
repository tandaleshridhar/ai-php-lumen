<?php

namespace App\Http\Controllers;
use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller 
{
  public function index()
  {
    $district = District::all();
    return response()->json($district, 200);
  }

  public function create(Request $request)
  {
    $district = new District();
    
    $district->name = $request->districtName;
    
    $district->save();

    return response()->json($district, 200);
  }  
}