<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'alias',
    ];

    public function novels()
    {
        return $this->hasMany('App\Novel');
    }
}
