<?php

namespace App\Http\Controllers;
use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller 
{
  public function index()
  {
    $animal = Animal::all();
    return response()->json($animal, 200);
  }

  public function create(Request $request)
  {
    $animal = new Animal();
    
    $animal->customer_id = $request->customerId;
    $animal->animal_type_id = $request->animalTypeId;
    $animal->tag = $request->tag;
    $animal->name = $request->name;
    $animal->breed = $request->breed;
    $animal->color = $request->color;
    $animal->sex = $request->sex;
 
    $animal->save();

    return response()->json($animal, 200);
  }  
}