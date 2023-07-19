<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
        protected $collection = 'motor';
        protected $connection = 'mongodb';
}
