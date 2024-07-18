<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comments extends Model
{
    public function replies()
    {
        return $this->hasmany(comment_replies::class);
    }
}
