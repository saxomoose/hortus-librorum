<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    protected $with = ['tag'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function tag() {
        return $this->belongsTo(Tag::class);
    }
}
