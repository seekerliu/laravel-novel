<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Novel[] $novels
 * @mixin \Eloquent
 */
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
