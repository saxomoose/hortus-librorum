<x-admin-layout>
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
    <main role="main">
        <div class="container">
            <div class="row mt-sm-4">
                <div class="col">
                    <a href="{{route('admin.summaries.index')}}">Retour au tableau de bord</a>
                </div>
            </div>
            <div class="row my-sm-4 pb-sm-4">
                <div class="col">
                    <form method="POST" action="{{route('admin.summaries.update', ['summary' => $summary])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <x-author-select-edit :summary="$summary"></x-author-select-edit>
                            <x-tag-select-edit :summary="$summary"></x-tag-select-edit>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$summary->title}}" required>
                            </div>
                            @if(isset($summary->publication_year))
                                <div class="form-group col-sm-6">
                                    <label for="publication_year">Année de publication <span class="text-muted">(uniquement pour résumés)</span></label>
                                    <input type="number" step="1" class="form-control" name="publication_year" id="publication_year" value="{{$summary->publication_year}}">

                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Accroche</label>
                            <input type="text" class="form-control" name="excerpt" id="excerpt" value="{!! $summary->excerpt !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Corps</label>
                            <textarea name="body" id="body" hidden>{{$summary->lb_raw_content}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
            Laraberg.init('body', {height: '600px', sidebar: false})
        })
    </script>
@endsection
</x-admin-layout>
