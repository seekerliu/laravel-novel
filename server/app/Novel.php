<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Novel
 *
 * @property-read \App\Author $author
 * @property-read \App\Category $category
 * @property-read mixed $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @mixin \Eloquent
 */
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

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
     * 热门推荐
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public function recommended()
    {
        return $this->inRandomOrder()->take(8)->get();
    }

    /**
     * 热门排行
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public function hotRank()
    {
        return $this->with('author')->orderBy('hot', 'desc')->take(8)->get();
    }

    /**
     * 通过分类获取小说
     * @param $name
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getByCategory($name)
    {
        return $this->whereHas('category',function($query) use ($name) {
            $query->where('name', $name);
        })->paginate();
    }

    public function getStatusAttribute()
    {
        if($this->isFinished) {
            return '已完结';
        }

        return '连载中';
    }

}
