<?php

namespace App\Services;

use App\Repositories\MobilRepository;

class MobilService {
    private $MobilRepository;

    public function __construct(MobilRepository $MobilRepository) {
        $this->MobilRepository = $MobilRepository;
    }

    public function findAll() {
        return $this->MobilRepository->getAllMobil();
    }

    public function findAllStock($id){
        return $this->MobilRepository->getStockMobil($id);
    }
}