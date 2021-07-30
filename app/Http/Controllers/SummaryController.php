<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    public function index() {

        return view('summaries.index', [
            'summaries' => Summary::paginate(9)//filter + paginate
        ]);
    }

    public function show(Summary $summary) {
        return view('summaries.show', [
            'summary' => $summary
        ]);
    }
}
