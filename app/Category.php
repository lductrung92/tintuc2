<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id', 'alias', 'description', 'status'];

    public function childs ()
    {
        return $this->hasMany('parent_id', 'id', 'App\Category');
    }

    public function parent ()
    {
        return $this->belongsTo('parent_id', 'id', 'App\Category');
    }

    public function articles ()
    {
        return $this->hasMany('category_id', 'id', 'App\Article');
    }
}
