<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function novels()
    {
        return $this->belongsToMany('App\Novel');
    }
}
