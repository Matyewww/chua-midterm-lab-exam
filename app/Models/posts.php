<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
   public function comments()
   {
   return $this->hasMany(post_comment::class);
   }
}
