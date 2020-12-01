<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowSection2Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type',
        'content_id'
    ];

    protected $table="si_show_section2_content";
}
