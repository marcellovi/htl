<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'keys';

    protected $fillable = ['item_name', 'description', 'price'];
    
    public function vehicle(){
        return $this->hasOne(Vehicle::class,'key_id','id');
    }
}
