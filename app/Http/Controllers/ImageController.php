<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller 
{

  public function __construct(Image $image)
  {
      $this->image = $image;      
  }
  
  public function store(Request $request)
  {
    $filename = $request->file('avatar')->getClientOriginalName();
    $filename = \uniqid() . $filename;
    $destinationPath = "uploads/user_files/animals";
    $request->file('avatar')->move($destinationPath,$filename);
    $this->image->filename = $destinationPath.'/'.$filename;
    $this->image->avatar = $filename;
    $this->image->status = 'active'; 
    $this->image->save();

    return response()->json(array('success' => true, 'last_insert_id' => $this->image->id), 200);
     
  }    
}