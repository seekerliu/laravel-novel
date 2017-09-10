<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
    ];

    public function novels()
    {
        return $this->hasMany('App\Novel');
    }

    public function articles()
    {
        return $this->hasManyThrough('App\Article', 'App\Novel');
    }


}
