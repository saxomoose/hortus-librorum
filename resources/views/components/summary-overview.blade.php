@foreach($summaries as $summary)
    <div class="d-flex my-1">
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
            <form method="POST" action="{{route('admin.summaries.destroy', ['summary' => $summary])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('admin.summaries.edit', ['summary' => $summary])}}" class="btn btn-primary">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
@endforeach
