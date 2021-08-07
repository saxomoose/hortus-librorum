<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller {

    public function index(Tag $tag) {
        return view('tags.index', [
            'summaries' => $tag->summaries
        ]);
    }
}
