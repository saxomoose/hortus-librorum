<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('admin.summaries.index')}}">Back to dashboard</a>
                </div>
            </div>
            <div class="row my-4 pb-4">
                <div class="col">
                    <form method="POST" action="{{route('admin.summaries.update', ['summary' => $summary])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <x-author-select></x-author-select>
                            <x-tag-select></x-tag-select>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$summary->title}}" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="publication_year">Publication year</label>
                                <input type="number" step="1" class="form-control" name="publication_year" id="publication_year" value="{{$summary->publication_year}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control" name="excerpt" id="excerpt" value="{!! $summary->excerpt !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" hidden>{{$summary->lb_raw_content}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@section('scripts')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            Laraberg.init('body', {height: '600px', sidebar: true})
        })
    </script>
@endsection
</x-admin-layout>
