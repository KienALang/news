<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'preview', 'detail', 'path', 'category_id'
    ];

    /**
     * Get category film detail of film.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id')->withTimestamps();
    }

     /**
     * Get comment film detail of film.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'film_id', 'id');
    }

}
