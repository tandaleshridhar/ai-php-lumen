<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemenBuyer extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semen_id', 'balance', 'price', 'total_amount', 'total_quantity', 'other_expenses'
    ];

}
