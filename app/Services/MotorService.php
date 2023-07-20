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

    // protected function findAllStock($type){

    // }
}