<?php

namespace App\View\Components;

use App\Models\Author;
use App\Models\Summary;
use Illuminate\View\Component;

class AuthorSelectEdit extends Component
{
    public Summary $summary;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($summary)
    {
        $this->summary = $summary;
    }

    //Work in progress.
    public function isSelected($authorId) {
        $selectedAuthors = array();
        foreach($this->summary->authors as $author) {
            array_push($selectedAuthors, $author->pivot->author_id);
        }

        return in_array($authorId, $selectedAuthors);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.author-select-edit', [
            'authors' => Author::all()
        ]);
    }
}


