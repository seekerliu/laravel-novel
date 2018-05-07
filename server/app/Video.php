<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Video extends Model
{
    protected $collection = 'items';
}
