<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    protected $with = ['authors', 'tags'];

    public function authors() {
        return $this->belongsToMany(Author::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
