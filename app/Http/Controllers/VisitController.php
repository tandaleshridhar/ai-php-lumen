<?php

namespace App\Http\Controllers;
use App\Image;
use App\Recording;
use App\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitController extends Controller 
{
  public function __construct(Image $image, Recording $recording)
  {
      $this->image = $image;
      $this->recording = $recording;
  }

  public function index()
  {
    $visit = Visit::all();
    return response()->json($visit, 200);
  }

  public function store(Request $request)
  {
    $visit = new Visit();
    
    $visit->customer_id = $request->customerId;
    $visit->semen_id = $request->semenId;
    $visit->customer_name = $request->customerName;
    $visit->animal_type = $request->animalType;
    $visit->tag_no = $request->tagNo;
    $visit->animal_desc = $request->animalDesc;
    $visit->animal_health = $request->animalHealth;
    $visit->semen_name = $request->semenName;
    $visit->image_id = 1;
    $visit->recording_id = 1;
    //$visit->hit_date = $table->timestamp('added_on')->nullable()->default(time());
    //$visit->pd_date = Carbon::parse($request->pdDate)->format('m-d-Y');
    //$visit->delivery_date = Carbon::parse($request->deliveryDate)->format('m-d-Y');
    $visit->birth_gender = $request->birthGender;
    $visit->fee = $request->fee;

    /*
    if ($request->hasFile('image') && $request->file('image')->isValid()){
      $file = $request—>file('image')->getClientOriginalName();
      $filaName = uniqid() . "_" . $file;
      $path = '/storage/app/public';
      $destPath = public_path($path);
      $request->file('image')->move($destPath, $filaName); 
    }
    */
        
    $visit->save();

    return response()->json($visit, 200);
  }  

  public function show1($id)
  {
    $visit = Visit::find('id',$id);
    return response()->json($visit, 200);
  }

  public function update(Request $request, $id)
  {
    $visit = Visit::find($id);

    $visit->save();

    return response()->json($visit);
  }

  public function destroy($id)
  {
    $visit = Visit::find($id);
    $visit->delete();

    return response()->json('Visit information removed successfully');
  }

  public function getVisitByCustomer($customer_id)
  {
    $visit = Visit::find($customer_id);
    return response()->json($visit, 200);
  }
}