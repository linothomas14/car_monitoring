<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Car;
use App\Models\Driver;

class Rent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "usage_date",
        "car_id",
        "driver_id",
        "boss_id",
        "approved"
    ];
    
    protected $attributes = [
        'approved' => 0,
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'boss_id');
    }
}
