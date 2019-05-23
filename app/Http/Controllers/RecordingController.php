<?php

namespace App\Http\Controllers;
use App\Recording;
use Illuminate\Http\Request;

class RecordingController extends Controller 
{
  
  public function store(Request $request)
  {
    $rec = new Recording(); 
    /* 
    $this->validate($request, array(
      'title' => 'nullable | max: 100',
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'recording' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
    )); 
   */
    $filename = $request->file('recording')->getClientOriginalName();
    $filename = \uniqid() . $filename;
    $destinationPath = "uploads/user_files/recording";
    $request->file('recording')->move($destinationPath,$filename);
    $rec->filename = $destinationPath.'/'.$filename;
    $rec->file = $filename;
    $rec->status = 'active'; 
    $rec->save();        
    
    return response()->json(array('success' => true, 'last_insert_id' => $rec->id), 200);    
  }   
}