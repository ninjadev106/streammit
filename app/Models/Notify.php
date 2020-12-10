<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'icon',
        'link',
        'user_id',
        'pushed_at',
    ];

    protected $table = 'si_notify_store';
}
