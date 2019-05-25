<?php

namespace App\Http\Controllers;
use App\AnimalType;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller 
{
  public function index()
  {
    $animalType = AnimalType::all();
    return response()->json($animalType, 200);
  }

  public function create(Request $request)
  {
    $animalType = new AnimalType();
    
    $animalType->name = $request->name;
 
    $animalType->save();

    return response()->json($animalType, 200);
  }  
}