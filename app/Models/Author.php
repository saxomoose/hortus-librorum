<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Author and Summary form a many-to-many relationship
class Author extends Model {
    use HasFactory;

    protected $guarded = [];//to be reviewed

    public function summaries() {
        return $this->belongsToMany(Summary::class);
    }
}
