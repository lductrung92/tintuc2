<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['id', 'category_id', 'title', 'alias', 'tag', 'image', 'description', 'content', 'status'];

    public function category ()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
