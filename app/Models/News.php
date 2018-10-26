<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = false;

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
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
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

    public function getItems()
    {
        return DB::table('news')->join('categories as cat', 'news.category_id', '=', 'cat.id')
                                    ->orderBy('news.id', 'DESC')
                                    ->select('news.*', 'cat.name')
                                    ->take(3)
                                    ->get();
    }

    public function getLatestNews()
    {
        return DB::table('news')->join('categories as cat', 'news.category_id', '=', 'cat.id')
                                    ->orderBy('news.id', 'DESC')
                                    ->select('news.*', 'cat.name')
                                    ->take(4)
                                    ->get();
    }
}
