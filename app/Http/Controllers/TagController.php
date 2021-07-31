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

    public function create() {
        return view('tags.create');
    }

    public function store(Request $request) {
        $validatedAttributes = $request->validate([
            'name' => 'required'
        ]);

        $el = array('slug' => Str::slug($request->input('name')));
        $attributes = array_merge($validatedAttributes, $el);

        Tag::create($attributes);

        return redirect()->route('admin')->with('status', 'Tag added.');
    }
}
