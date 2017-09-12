<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property-read \App\Novel $novel
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $fillable = [
        'novel_id', 'name', 'content', 'hits',
    ];

    public function novel()
    {
        return $this->belongsTo('App\Novel');
    }
}
