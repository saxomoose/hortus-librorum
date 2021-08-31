<?php

namespace App\View\Components;

use App\Models\Summary;
use App\Models\Tag;
use Illuminate\View\Component;

class TagSelectEdit extends Component {

    public Summary $summary;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Summary $summary)
    {
        $this->summary = $summary;
    }

    //Work in progress.
    public function isSelected($tagId) {
        $selectedTags = array();
        foreach($this->summary->tags as $tag) {
            array_push($selectedTags, $tag->pivot->tag_id);
        }

        return in_array($tagId, $selectedTags);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-select-edit', [
            'tags' => Tag::all()
        ]);
    }
}

