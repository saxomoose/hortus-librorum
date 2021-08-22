<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\View\Component;

class TagDropdown extends Component {

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-dropdown', [
            'tags' => Tag::all()
        ]);
    }
}
