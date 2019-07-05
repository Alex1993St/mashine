<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
     public $table = 'works';
     public $fillable = ['title', 'price'];
     public $timestamps = false;
}
