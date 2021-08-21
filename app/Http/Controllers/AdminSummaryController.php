<?php
namespace App\Http\Controllers;

use App\Models\Summary;
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
    public function store()
    {
        $validatedAttributes = $this->validateSummary();

        //Generates slug on the basis of summary title and adds it to form data to be persisted.
        $validatedAttributesCleaned = array_diff_key($validatedAttributes, ['authors' => 'xy', 'tags' => 'xy']);
        $slugEl = array('slug' => Str::slug($validatedAttributesCleaned['title']));
        $attributes = array_merge($validatedAttributesCleaned, $slugEl);

        $summary = Summary::create($attributes);
        $summary->authors()->attach($validatedAttributes['authors']);
        $summary->tags()->attach($validatedAttributes['tags']);

        return redirect()->route('summaries.index')->with('status', 'Summary added.');
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
    public function update(Summary $summary)
    {
        $validatedAttributes = $this->validateSummary();

        //Generates slug on the basis of author name and adds it to form data to be persisted.
        $validatedAttributesCleaned = array_diff_key($validatedAttributes, ['authors' => 'xy', 'tags' => 'xy']);
        $slugEl = array('slug' => Str::slug($validatedAttributesCleaned['title']));
        $attributes = array_merge($validatedAttributesCleaned, $slugEl);


        $summary->update($attributes);
        $summary->authors()->attach($validatedAttributes['authors']);
        $summary->tags()->attach($validatedAttributes['tags']);

        return redirect()->route('summaries.index')->with('status', 'Summary added.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Summary $summary)
    {
        $summary->delete();

        return redirect()->route('summaries.index')->with('status', 'Summary deleted.');
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
            'publication_year' => 'required',
            'tags' => ['required', Rule::exists('tags', 'id')],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
