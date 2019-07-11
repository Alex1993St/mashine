<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
   public $table = 'seeds';
   protected $fillable = ['seeder', 'status', 'count'];
}
