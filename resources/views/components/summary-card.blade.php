<div class="col-md-6">
    <div class="d-flex justify-content-end">
        @foreach($summary->tags as $tag)
            <a href="/tags/{{$tag->slug}}" class="border border-info rounded mx-1 pl-1 pr-1">{{$tag->name}}</a>
        @endforeach
    </div>
    <div class="card mb-4 shadow-sm mt-1">
        <svg class="card-img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/>
            <foreignObject x="0" y="0" height="100%" width="100%">
                <div class="text-center text-light my-5 py-5">
                    {{$summary->title}}
                </div>
            </foreignObject>
        </svg>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <small class="text-muted">By
                    @foreach($summary->authors as $author)
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
                <small class="text-muted mx-3">Published <time>{{$summary->created_at->diffForHumans()}}</time></small>
            </div>
            <p class="card-text">{!! $summary->excerpt !!}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="/summaries/{{$summary->slug}}" class="btn btn-sm btn-primary">View</a>
            </div>
        </div>
    </div>
</div>
