<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnyxOriginContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type',
        'content_id'
    ];

    protected $table="si_onyx_original_content";
}
