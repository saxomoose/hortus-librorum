<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller {

    public function index(Author $author) {
        return view('authors.index', [
            'summaries' => $author->summaries
        ]);
    }
}
