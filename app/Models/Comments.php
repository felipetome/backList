<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'user_origin_id',
        'user_target_id',
        'content_id',
        'comment',
        'created',
        'likes_count',
    ];
}
