<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller {

    /**
     * Returns a view populated with all summaries linked to a given tag.
     * @param Tag $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Tag $tag) {
        return view('tags.index', [
            'summaries' => $tag->summaries
        ]);
    }
}
