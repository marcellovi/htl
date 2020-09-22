<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = ['year','key_id', 'make', 'model', 'vin'];
    
    public function key(){
        return $this->belongsTo(Key::class,'key_id','id');
    }
}
