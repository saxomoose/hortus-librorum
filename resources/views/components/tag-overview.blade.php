@foreach($tags as $tag)
    <div class="d-flex my-1">
        <div class="mr-3">{{$tag->id}}</div>
        <div class="flex-fill">{{$tag->name}}</div>
        <div class="ml-auto">
            <form method="POST" action="{{route('admin.tags.destroy', ['tag' => $tag])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('admin.tags.edit', ['tag' => $tag])}}" class="btn btn-primary">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
    </div>
@endforeach
