<?php

namespace App\Http\Controllers;
use App\Semen;
use Illuminate\Http\Request;

class SemenController extends Controller 
{
  public function index()
  {
    $semens = Semen::all();
    return response()->json($semens, 200);
  }

  public function create(Request $request)
  {
    $semen = new Semen();
    
    $semen->name = $request->semenName;
    $semen->price = $request->initialPrice;
    $semen->description = $request->description;

    $semen->save();

    return response()->json($semen, 200);
  }

  public function show($id)
  {
    $semen = Semen::find($id);

    return response()->json($semen, 200);
  }

  public function update(Request $request, $id)
  {
    $semen = Semen::find($id);

    $semen->name = $request->input('name');
    $semen->price = $request->input('price');
    $semen->description = $request->input('description');
    $semen->save();

    return response()->json($semen);
  }

  public function destroy($id)
  {
    $semen = Semen::find($id);
    $semen->delete();

    return response()->json('Product removed successfully');
  }
}