<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function index() {
        return view('summaries.index', [
            'summaries' => Summary::all()//filter + paginate
        ]);
    }
}
