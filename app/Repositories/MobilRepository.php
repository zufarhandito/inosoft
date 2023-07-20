<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Repositories\KendaraanRepository;

class MobilRepository extends KendaraanRepository{

    //ganti ke overload
    public function getAllMobil()
    {
        $dataMobil = parent::getAll(Mobil::class);
        return $dataMobil;
    }

    public function getStockMobil($id)
    {
        $stock = parent::getStock(Mobil::class,$id);
        return $stock;
    }
}