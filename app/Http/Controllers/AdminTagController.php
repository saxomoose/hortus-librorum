<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validatedAttributes = $this->validateTag();

        $el = array('slug' => Str::slug($validatedAttributes['name']));
        $attributes = array_merge($validatedAttributes, $el);

        Tag::create($attributes);

        return redirect()->route('tags.index')->with('status', 'Tag added.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag) {
        return view('admin.tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Tag $tag)
    {
        $validatedAttributes = $this->validateTag($tag);

        $el = array('slug' => Str::slug($validatedAttributes['name']));
        $attributes = array_merge($validatedAttributes, $el);

        $tag->update($attributes);

        return redirect()->route('tags.index')->with('status', 'Tag updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('status', 'Tag deleted.');
    }

    protected function validateTag(?Tag $tag = null): array {
        //$tag ??= new Tag();

        return request()->validate([
            'name' => 'required'
        ]);
    }
}
