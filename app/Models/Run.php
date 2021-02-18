<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    use HasFactory;

    public function lines(){
        return $this->belongsTo(Line::class);
    }

    public function vehicles(){
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }

    public function driver(){
        return $this->belongsTo(User::class,'driverUser_id');
    }
}
