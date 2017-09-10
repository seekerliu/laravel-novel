<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = [
        'author_id', 'category_id', 'name', 'description', 'cover',
        'is_finished',
    ];

    protected $casts = [
        'is_finished' => 'boolean',
    ];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function getStatusAttribute()
    {
        if($this->isFinished) {
            return '已完结';
        }

        return '连载中';
    }
}
