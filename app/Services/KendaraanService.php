<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService {
    private $kendaraanRepository;
    protected $tahunKeluaran;
    protected $warna;
    protected $harga;

    public function __construct(KendaraanRepository $kendaraanRepository) {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    protected function findAll() {
        return $this->kendaraanRepository->getAll();
    }

    protected function findAllStock($id){

    }
}