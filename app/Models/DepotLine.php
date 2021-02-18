<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepotLine extends Model
{
    use HasFactory;

    public function depotLineCategories()
    {
        return $this->belongsTo(DepotLineCategory::class, 'depotLineCategory_Id');
    }

    public function depot(){
        return $this->belongsTo(Depot::class);
    }

    public function vehicles(){
        return $this->belongsToMany(Vehicle::class, 'depotLine_vehicle', 'depotLine_id','vehicle_id');
    }

    public function vehicle(){
        return $this->vehicles()->where('current', '=', '1')->limit(1);
    }
}
