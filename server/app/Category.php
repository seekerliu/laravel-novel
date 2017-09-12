<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Novel[] $novels
 * @mixin \Eloquent
 */
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
