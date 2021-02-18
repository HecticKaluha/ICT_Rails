<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function runs(){
        return $this->hasMany(Run::class,'vehicle_id');
    }

    public function depotLines(){
        return $this->belongsToMany(DepotLine::class, 'depotLine_vehicle', 'vehicle_id','depotLine_id');
    }

    public function depotLine(){
        return $this->depotLines()->where('current', 1)->limit(1);
    }
}
