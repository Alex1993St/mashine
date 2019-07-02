<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';
    protected $fillable = ['title', 'description', 'img', 'short_text', 'slug'];

    public static function createSlug($slug)
    {
        return str_slug($slug, '-');
    }
}
