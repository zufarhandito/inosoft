<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanRepository {

    public function getAll($model = null)
    {
        $dataKendaraan = $model::all();

        //Jika tidak ada, ya 404
        if(count($dataKendaraan)=== 0){
            return response()->json(['message' => 'Kendaraan tidak ditemukan'], 404);
        }

        return $dataKendaraan;
    }

    public function getStock($model,$id){
        $dataKendaraan = $model::find($id);

        if(!$dataKendaraan){
            return response()->json(['message' => 'Kendaraan tidak ditemukan'], 404);
        }

        return $dataKendaraan->stock;
    }
}