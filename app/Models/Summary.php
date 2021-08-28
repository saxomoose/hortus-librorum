<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

//Summary and Author form a many-to-many relationship. Summary and Tag form a many-to-many relationship.
class Summary extends Model {
    use HasFactory;
    use Gutenbergable;

    protected $guarded = [];//to be reviewed
    protected $with = ['authors', 'tags'];

    public function authors() {
        return $this->belongsToMany(Author::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
