<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];//to be reviewed

    public function summaries() {
        return $this->belongsToMany(Summary::class);
    }
}
