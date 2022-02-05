<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WordCategory;
use App\Models\Video;

class Word extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function word_category()
    {
        return $this->hasOne(WordCategory::class, 'id', 'word_category_id');
    }

    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
}
