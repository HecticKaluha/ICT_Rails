<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    public function Services()
    {
        return $this->hasMany(Service::class, 'serviceType_id');
    }
}
