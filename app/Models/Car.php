<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends BaseModel
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_name', 'model_name', 'manufacturing_year'];

    /**
     *  function for Car belongs to Users
     *
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id')->select('id', 'city_id', 'first_name', 'email', 'address1', 'phone', 'profile_picture');
    }

    /**
     *  function for Car hasMany CarService
     *
     */
    public function carServices()
    {
        return $this->hasMany(CarService::class, 'car_id')->select('id', 'garage_id', 'car_id', 'status');
    }
}
