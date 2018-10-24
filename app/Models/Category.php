<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get category film detail of category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function films()
    {
        return $this->hasMany('App\Models\News', 'category_id', 'id');
    }
}
