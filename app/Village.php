<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'taluka_id', 'name' ];    
}
