<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'show',
        'season',
        'episode',
        'name',
        'description',
        'date',
        'duration',
        'file',
        'video_link'
    ];

    protected $table = 'si_episodes';

    public function show_record()
    {
        return $this->belongsTo(Show::class, 'show', 'id');
    }
}
