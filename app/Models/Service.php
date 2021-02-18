<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function serviceTypes()
    {
        return $this->belongsTo(ServiceType::class, 'serviceType_Id');
    }

    public function serviceStatuses()
    {
        return $this->belongsTo(ServiceStatus::class, 'serviceStatus_Id');
    }
}
