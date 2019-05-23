<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taluka extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'district_id', 'name' ];    
}
