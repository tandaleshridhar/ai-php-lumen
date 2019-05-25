<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'visits';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'customer_id', 'semen_id', 'customer_name', 'animal_type', 'tag_no', 
        'animal_desc', 'animal_health', 'semen_name', 'image_id', 'recording_id',
        'hit_date', 'pd_date', 'delivery_date', 'birth_gender', 'fee'
    ];
    
    public function image()
    {
       return $this->belongsTo('App\Image');
    }

    public function recording()
    {
       return $this->belongsTo('App\Recording');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
