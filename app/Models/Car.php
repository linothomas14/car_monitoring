<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        "plate_number",
        "model",
        "brand",
        "type",
        "fuel_consumption",
        "service_date",
        "last_usage",
    ];


}
