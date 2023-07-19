<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanRepository {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        return Kendaraan::all();
    }
}