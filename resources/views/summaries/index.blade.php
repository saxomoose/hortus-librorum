<x-layout>
    <main role="main">
    <x-tag-dropdown />
    @if($summaries->count() > 0)
            <section class="jumbotron text-center p-sm-4 mb-sm-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mx-sm-auto">
                            <div class="d-flex justify-content-end">
                                @foreach($summaries[0]->tags as $tag)
                                    <a href="{{route('tags.show', ['tag' => $tag])}}" class="border border-info rounded mx-sm-1 pl-sm-1 pr-sm-1">{{$tag->name}}</a>
                                @endforeach
                            </div>
                            <h1 class="mt-sm-1 text-dark">
                                {{$summaries[0]->title}}
                            </h1>
                                <div class="d-flex justify-content-center">
                                    <small class="text-muted">Par
                                        @foreach($summaries[0]->authors as $author)
                                            @if(!$loop->last)
                                                <a href="{{route('authors.show', ['author' => $author])}}">
                                                    {{$author->name . ', '}}
                                                </a>
                                            @else
                                                <a href="{{route('authors.show', ['author' => $author])}}">
                                                     {{$author->name}}
                                                </a>
                                            @endif
                                        @endforeach
                                    </small>
                                    <small class="text-muted mx-sm-3">Publié <time>{{\Carbon\Carbon::parse($summaries[0]->published_at)->diffForHumans()}}</time></small>
                                </div>
                            <p class="lead text-muted">{!! $summaries[0]->excerpt !!}</p>
                            <a href="{{route('summaries.show', ['summary' => $summaries[0]])}}" class="btn btn-primary my-sm-2">Continuer la lecture</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="album py-sm-3 bg-light">
                    <div class="container">
                        <div class="row">
                            @foreach($summaries->skip(1) as $summary)
                                <x-summary-card :summary="$summary" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            {{$summaries->links()}}
        @else
            <p class="text-center">Aucun article publié.</p>
        @endif
    </main>
@section('scripts')
    <script>
        document.querySelectorAll('.card-img').forEach( elem => {

            let R = Math.floor((Math.random() * 127) + 127);
            let G = Math.floor((Math.random() * 127) + 127);
            let B = Math.floor((Math.random() * 127) + 127);

            let rgb = (R << 16) + (G << 8) + B;

            let pastel = `#${rgb.toString(16)}`;
            elem.setAttribute('fill', pastel);
        })
    </script>
@endsection
</x-layout>
