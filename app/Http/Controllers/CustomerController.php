<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller 
{
  public function index()
  {
    $customers = Customer::all();
    return response()->json($customers, 200);
  }

  public function create(Request $request)
  {
    $customer = new Customer();
    
    $customer->first_name = $request->firstName;
    $customer->last_name = $request->lastName;
    $customer->mobile = $request->mobile;
    $customer->address = $request->address;
    $customer->village = $request->village;   
    $customer->taluka = $request->taluka;   
    $customer->district = $request->district;   

    $customer->save();

    return response()->json($customer, 200);
  }

  public function show($id)
  {
    $customer = Customer::find($id);
    return response()->json($customer, 200);
  }

  public function update(Request $request, $id)
  {
    $customer = Customer::find($id);

    $customer->first_name = $request->firstName;
    $customer->last_name = $request->lastName;
    $customer->mobile = $request->mobile;
    $customer->address = $request->address;
    $customer->village = $request->village;   
    $customer->taluka = $request->taluka;   
    $customer->district = $request->district;   

    $customer->save();

    return response()->json($customer);
  }

  public function destroy($id)
  {
    $customer = Customer::find($id);
    $customer->delete();

    return response()->json('Customer removed successfully');
  }
}