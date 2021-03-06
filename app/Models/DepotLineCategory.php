<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepotLineCategory extends Model
{
    use HasFactory;

    public function depotLines()
    {
        return $this->hasMany(DepotLine::class, 'depotLineCategory_Id');
    }
}
