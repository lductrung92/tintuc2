<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['category_id', 'title', 'alias', 'tag', 'image', 'description', 'content', 'status'];

    public function category ()
    {
        return $this->belongsTo('category_id', 'id', 'App\Category');
    }
}
