@foreach($tags as $tag)
    <div class="d-flex my-1">
        <div class="mr-3">{{$tag->id}}</div>
        <div class="flex-fill">{{$tag->name}}</div>
        <div class="ml-auto">
            <form method="POST" action="{{route('tags.destroy', ['tag' => $tag])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('tags.edit', ['tag' => $tag])}}" class="btn btn-primary">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
@endforeach
