<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    protected $collection = 'Kendaraan';
    protected $connection = 'mongodb';
}
