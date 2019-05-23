<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id', 'animal_type_id', 'tag', 'name', ' 	breed', 'color', 'sex' ];    
}
