<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller {

    /**
     * Returns a view populated with all summaries of books published by a given author.
     * @param Author $author
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Author $author) {
        return view('authors.index', [
            'summaries' => $author->summaries
        ]);
    }
}
