<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'customers';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'first_name', 'last_name','mobile','address','village','taluka','district'
    ];

    public function visits()
    {
        return $this->hasMany('App\Visit','customer_id');
    }

}
