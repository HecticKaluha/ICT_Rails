<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'serviceType_id');
    }

    public function serviceStatus()
    {
        return $this->belongsTo(ServiceStatus::class, 'serviceStatus_id');
    }
}
