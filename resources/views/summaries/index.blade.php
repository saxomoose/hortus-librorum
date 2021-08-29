<x-layout>
    <main role="main">
    <x-tag-dropdown />
    @if($summaries->count() > 0)
            <section class="jumbotron text-center p-4 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <div class="d-flex justify-content-end">
                                @foreach($summaries[0]->tags as $tag)
                                    <a href="/tags/{{$tag->slug}}" class="border border-info rounded mx-1 pl-1 pr-1">{{$tag->name}}</a>
                                @endforeach
                            </div>
                            <h1 class="mt-1">
                                <a href="/summaries/{{$summaries[0]->slug}}">
                                {{$summaries[0]->title}}
                                </a>
                            </h1>
                                <div class="d-flex justify-content-center">
                                    <small class="text-muted">By
                                        @foreach($summaries[0]->authors as $author)
                                            @if(!$loop->last)
                                                <a href="/authors/{{$author->slug}}">
                                                    {{$author->name . ', '}}
                                                </a>
                                            @else
                                                <a href="/authors/{{$author->slug}}">
                                                     {{$author->name}}
                                                </a>
                                            @endif
                                        @endforeach
                                    </small>
                                    <small class="text-muted mx-3">Published <time>{{\Carbon\Carbon::parse($summaries[0]->published_at)->diffForHumans()}}</time></small>
                                </div>
                            <p class="lead text-muted">{!! $summaries[0]->excerpt !!}</p>
                            <a href="/summaries/{{$summaries[0]->slug}}" class="btn btn-primary my-2">Continue reading more</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="album py-3 bg-light">
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
            <p class="text-center">No summaries yet available.</p>
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
