<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    protected $collection = 'Mobil';
    protected $connection = 'mongodb';
}
