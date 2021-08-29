<x-admin-layout>
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('admin.summaries.index')}}">Back to dashboard</a>
                </div>
            </div>
            <div class="row my-4 pb-4">
                <div class="col">
                    <form method="POST" action="{{route('admin.summaries.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <x-author-select></x-author-select>
                            <x-tag-select></x-tag-select>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="publication_year">Publication year</label>
                                <input type="number" step="1" class="form-control" name="publication_year" id="publication_year" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control" name="excerpt" id="excerpt" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" hidden></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@section('scripts')
    <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            Laraberg.init('body', {height: '600px', sidebar: true})
        })
    </script>
@endsection
</x-admin-layout>

