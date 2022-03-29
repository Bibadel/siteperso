<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->morphToMany(Tag::class, "taggable");
    }
}
