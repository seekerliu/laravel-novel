<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * App\Article
 *
 * @property-read \App\Novel $novel
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HybridRelations;

    protected $fillable = [
        'novel_id', 'name', 'content', 'hits',
    ];

    public function novel()
    {
        return $this->belongsTo('App\Novel');
    }

    public function next()
    {
        return static::where('id', '$gt', $this->id)
            ->where('novel_id', $this->novel_id)
            ->orderBy('id', 'asc')
            ->first();
    }

    public function previous()
    {
        return static::where('id', '$lt', $this->id)
            ->where('novel_id', $this->novel_id)
            ->orderBy('id', 'desc')
            ->first();
    }

}
