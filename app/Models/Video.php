<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Word;

class Video extends Model
{
    use HasFactory;

    public function words()
    {
        return $this->hasMany(Word::class, 'video_id', 'id');
    }
}
