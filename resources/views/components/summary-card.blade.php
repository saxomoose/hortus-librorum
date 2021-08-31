<div class="col-sm-6">
    <div class="d-flex justify-content-end">
        @foreach($summary->tags as $tag)
            <a href="{{route('tags.show', ['tag' => $tag])}}" class="border border-info rounded mx-sm-1 pl-sm-1 pr-sm-1">{{$tag->name}}</a>
        @endforeach
    </div>
    <div class="card mb-sm-4 shadow-sm mt-sm-1">
        <svg class="card-img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"/>
            <foreignObject x="0" y="0" height="100%" width="100%">
                <div class="text-center text-dark my-sm-5 py-sm-5">
                    {{$summary->title}}
                </div>
            </foreignObject>
        </svg>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <small class="text-muted">De
                    @foreach($summary->authors as $author)
                        @if(!$loop->last)
                            <a href="/authors/{{$author->slug}}">
                                {{$author->name . ', '}}
                            </a>
                        @else
                            <a href="{{route('authors.show', ['author' => $author])}}">
                                {{$author->name}}
                            </a>
                        @endif
                    @endforeach
                </small>
                <small class="text-muted mx-sm-3">Publié <time>{{\Carbon\Carbon::parse($summary->published_at)->diffForHumans()}}</time></small>
            </div>
            <p class="card-text">{!! $summary->excerpt !!}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('summaries.show', ['summary' => $summary])}}" class="btn btn-sm btn-primary">Lire</a>
            </div>
        </div>
    </div>
</div>
