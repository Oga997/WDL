<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
   protected $table = 'books';
   protected $fillable=['bk_nm','bk_catg','bk_aut','bk_pd'];
}
