<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'lang',
        'quality',
        'file',
        'banner',
        'trailer_link',
    ];

    protected $table = 'si_shows';

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
    
    public function episodes()
    {
        return $this->hasMany(Episode::class, 'show', 'id');
    }
}
