<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];  

    protected $table = 'si_video_category';

    public function movies()
    {
        return $this->hasMany(Movie::class, 'category', 'id');
    }
    public function shows()
    {
        return $this->hasMany(Show::class, 'category', 'id');
    }
}
