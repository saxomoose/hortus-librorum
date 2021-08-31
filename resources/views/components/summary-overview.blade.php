@foreach($summaries as $summary)
    <div class="d-flex my-sm-1">
        <div class="mr-sm-3">{{$summary->id}}</div>
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
                <a href="{{route('admin.summaries.edit', ['summary' => $summary])}}" class="btn btn-primary">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
    </div>
@endforeach
