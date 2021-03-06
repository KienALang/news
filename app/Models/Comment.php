<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'news_id', 'content'
    ];

    /**
     * Get user detail of comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    /**
     * Get comment detail of film.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function news()
    {
        return $this->belongsTo('App\Models\News', 'news_id', 'id');
    }
}
