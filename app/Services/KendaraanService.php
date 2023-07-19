<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService {
    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository) {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function findAllKendaraan() {
        return $this->kendaraanRepository->getAll();
    }
}