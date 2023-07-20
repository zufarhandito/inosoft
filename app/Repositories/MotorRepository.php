<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Repositories\KendaraanRepository;

class MotorRepository extends KendaraanRepository{

    //nanti ganti ke overload
    public function getAllMotor()
    {
        $dataMotor = parent::getAll(Motor::class);
        return $dataMotor;
    }
}