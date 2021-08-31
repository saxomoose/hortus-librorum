@foreach($tags as $tag)
    <div class="d-flex my-sm-1">
        <div class="mr-sm-3">{{$tag->id}}</div>
        <div class="flex-fill">{{$tag->name}}</div>
        <div class="ml-sm-auto">
            <form method="POST" action="{{route('admin.tags.destroy', ['tag' => $tag])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('admin.tags.edit', ['tag' => $tag])}}" class="btn btn-primary">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
    </div>
@endforeach
