<?php

namespace App\Http\Controllers;
use App\SemenBuyer;
use Illuminate\Http\Request;

class SemenBuyerController extends Controller 
{
  public function index()
  {
    $semens = SemenBuyer::all();
    return response()->json($semens, 200);
  }

  public function create(Request $request)
  {
    $semen = new SemenBuyer();
    
    $semen->semen_id = $request->semenInfo;
    $semen->balance = $request->balance;
    $semen->price = $request->initialPrice;
    $semen->total_amount = $request->totalCost;
    $semen->total_quantity = $request->totalQuantity;
    $semen->other_expenses = $request->otherExpenses;

    $semen->save();

    return response()->json($semen, 200);
  }

  public function show($id)
  {
    $semen = SemenBuyer::find($id);

    return response()->json($semen, 200);
  }

  /*
  public function update(Request $request, $id)
  {
    $semen = SemenBuyer::find($id);

    $semen->name = $request->input('name');
    $semen->price = $request->input('price');
    $semen->description = $request->input('description');
    $semen->save();

    return response()->json($semen);
  }

  public function destroy($id)
  {
    $semen = SemenBuyer::find($id);
    $semen->delete();

    return response()->json('Product removed successfully');
  }
  */
}