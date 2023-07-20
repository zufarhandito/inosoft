<?php

namespace App\Services;

use App\Repositories\PenjualanRepository;

class PenjualanService {
    private $penjualanRepository;

    public function __construct(PenjualanRepository $penjualanRepository) {
        $this->penjualanRepository = $penjualanRepository;
    }

    public function findAll() {
        return $this->penjualanRepository->getAllPenjualan();
    }

    public function storePenjualan($data) {
        return $this->penjualanRepository->createPenjualan($data);
    }

}