<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Author
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Novel[] $novels
 * @mixin \Eloquent
 */
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
