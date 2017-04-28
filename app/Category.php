<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'parent_id', 'alias', 'description', 'status'];

    public function childs ()
    {
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }

    public function parent ()
    {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    public function articles ()
    {
        return $this->hasMany('App\Article', 'category_id', 'id');
    }
}
