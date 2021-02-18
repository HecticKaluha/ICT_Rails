<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceStatus extends Model
{
    use HasFactory;

    public function Services()
    {
        return $this->hasMany(Service::class, 'serviceStatus_id');
    }
}
