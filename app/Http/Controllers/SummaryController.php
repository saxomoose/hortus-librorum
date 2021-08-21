<?php

namespace App\Http\Controllers;

use App\Models\Summary;

class SummaryController extends Controller {

    /**
     * Returns landing page of website. Passes a Laravel paginator instance to the view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        return view('summaries.index', [
            'summaries' => Summary::paginate(9)
        ]);
    }

    /**
     * Returns single summary view.
     * @param Summary $summary
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Summary $summary) {
        return view('summaries.show', [
            'summary' => $summary
        ]);
    }
}
