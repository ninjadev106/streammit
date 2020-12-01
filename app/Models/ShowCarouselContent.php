<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowCarouselContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type',
        'content_id'
    ];

    protected $table="si_show_carousel_content";
}
