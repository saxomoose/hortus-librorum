<?php
namespace App\Http\Controllers;

use App\Models\Summary;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.summaries.index');
    }

    /**
     * Show the form for creating a new resource.
     **/
    public function create()
    {
        return view('admin.summaries.create');
    }

    /**
     * Store a newly created resource in storage.
     **/
    public function store(Request $request)
    {
        $validatedAttributes = $this->validateSummary();

        $summary = new Summary;
        $summary->title = $validatedAttributes['title'];
        $summary->slug = Str::slug($validatedAttributes['title']);
        if($request->filled('publication_year')) {
            $summary->publication_year = $request['publication_year'];
        }
        $summary->excerpt = $validatedAttributes['excerpt'];
        $summary->published_at = Carbon::now();

        $summary->lb_content = $validatedAttributes['body'];

        $summary->save();

        $summary->authors()->attach($validatedAttributes['authors']);
        $summary->tags()->attach($validatedAttributes['tags']);

        return redirect()->route('admin.summaries.index')->with('status', 'Résumé ajouté.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Summary $summary)
    {
        return view('admin.summaries.edit', ['summary' => $summary]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Summary $summary, Request $request) {
        $validatedAttributes = $this->validateSummary();
        $summary->title = $validatedAttributes['title'];
        $summary->slug = Str::slug($validatedAttributes['title']);
        if($request->filled('publication_year')) {
            $summary->publication_year = $request['publication_year'];
        }
        $summary->excerpt = $validatedAttributes['excerpt'];
        $summary->lb_content = $validatedAttributes['body'];

        $summary->save();

        $summary->authors()->sync($validatedAttributes['authors']);
        $summary->tags()->sync($validatedAttributes['tags']);

        return redirect()->route('admin.summaries.index')->with('status', 'Résumé modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Summary $summary)
    {
        $summary->delete();

        return redirect()->route('admin.summaries.index')->with('status', 'Résumé supprimé.');
    }

    /**
     * Server-side validation of create and edit form inputs.
     * @param Summary|null $summary
     * @return array
     */
    protected function validateSummary(?Summary $summary = null): array {
        $summary ??= new Summary();

        return request()->validate([
            'authors' => ['required', Rule::exists('authors', 'id')],
            'title' => 'required',
            'tags' => ['required', Rule::exists('tags', 'id')],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
