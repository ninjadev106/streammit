<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'description',
        'content_type',
        'content_id',
        'date',
    ];

    protected $table = 'si_comments';

    public function author_record()
    {
        return $this->belongsTo(User::class, "author", "id");
    }
}
