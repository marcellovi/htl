<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $table = 'technicians';

    protected $fillable = ['first_name', 'last_name', 'truck_number'];
}
