@foreach($summaries as $summary)
    <div class="d-flex">
        <div class="mr-3">{{$summary->id}}</div>
        <div class="flex-fill">
            @foreach($summary->authors as $author)
                @if(!$loop->last)
                    {{$author->name . ', '}}
                @else
                    {{$author->name}}
                @endif
            @endforeach
        </div>
        <div class="flex-fill">{{$summary->title}}</div>
        <div class="flex-fill">
            @foreach($summary->tags as $tag)
                @if(!$loop->last)
                    {{$tag->name . ', '}}
                @else
                    {{$tag->name}}
                @endif
            @endforeach
        </div>
        <div class="ml-auto">
            <button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button>
        </div>
    </div>
@endforeach
