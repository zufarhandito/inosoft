<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\Mobil;
use App\Models\Motor;

class PenjualanRepository {

    private $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository) {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function getAllPenjualan()
    {
        $dataPenjualan = Penjualan::all();
        return $dataPenjualan;
    }

    public function createPenjualan($data)
    {
        //menggunakan transaction karena akan insert ke Penjualan dan update stock kendaraan
        // DB::beginTransaction();

        try {
            $penjualan = Penjualan::create([
                "idKendaraan" => $data->idKendaraan,
                "jenisKendaraan" => $data->jenisKendaraan,
                "jumlahPenjualan" => $data->quantity
            ]);

            if($data->jenisKendaraan === 'mobil') {
                $getStock = $this->kendaraanRepository->getStock(Mobil::class,$data->idKendaraan);
                Mobil::find($data->idKendaraan)->update(['stock'=>$getStock - $data->quantity]);
            }

            if($data->jenisKendaraan === 'motor') {
                $getStock = $this->kendaraanRepository->getStock(Motor::class,$data->idKendaraan);
                Motor::find($data->idKendaraan)->update(['stock'=>$getStock - $data->quantity]);
            }

            // DB::commit();
            return $penjualan;

        } catch (\Throwable $th) {
            throw new \Exception('Gagal membuat penjualan.', 500);
        }
    }
}