<?php

namespace App\Services;

use App\Repositories\MotorRepository;

class MotorService {
    private $motorRepository;

    public function __construct(MotorRepository $motorRepository) {
        $this->motorRepository = $motorRepository;
    }

    public function findAll() {
        return $this->motorRepository->getAllMotor();
    }

    public function findAllStock($id){
        return $this->motorRepository->getStockMotor($id);
    }
}