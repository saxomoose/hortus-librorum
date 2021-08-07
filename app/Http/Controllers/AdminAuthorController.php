<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Str;

class AdminAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.authors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validatedAttributes = $this->validateAuthor();

        $el = array('slug' => Str::slug($validatedAttributes['name']));
        $attributes = array_merge($validatedAttributes, $el);

        Author::create($attributes);

        return redirect()->route('authors.index')->with('status', 'Author added.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author) {
        return view('admin.authors.edit', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Author $author)
    {
        $validatedAttributes = $this->validateAuthor($author);

        $el = array('slug' => Str::slug($validatedAttributes['name']));
        $attributes = array_merge($validatedAttributes, $el);

        $author->update($attributes);

        return redirect()->route('authors.index')->with('status', 'Author updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('status', 'Author deleted.');
    }

    protected function validateAuthor(?Author $author = null): array {
        //$author ??= new Author();

        return request()->validate([
            'name' => 'required'
        ]);
    }
}
