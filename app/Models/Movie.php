<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'lang',
        'quality',
        'file',
        'video_link',
        'trailer_link',
        'duration',
        'releseDate'
    ];

    protected $table = 'si_movies';

    public function category_record()
    {
        return $this->hasOne(VideoCategory::class, 'id', 'category');
    }
    public function lang_record()
    {
        return $this->hasOne(VideoLanguage::class, 'id', 'lang');
    }
    public function quality_record()
    {
        return $this->hasOne(VideoQuality::class, 'id', 'quality');
    }
}
