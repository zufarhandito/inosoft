<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Penjualan extends Model
{
    protected $collection = 'Penjualan';
    protected $connection = 'mongodb';
    protected $fillable = ['idKendaraan', 'jenisKendaraan', 'jumlahPenjualan'];
}
