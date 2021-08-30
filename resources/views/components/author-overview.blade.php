@foreach($authors as $author)
    <div class="d-flex my-1">
        <div class="mr-3">{{$author->id}}</div>
        <div class="flex-fill">{{$author->name}}</div>
        <div class="ml-auto">
            <form method="POST" action="{{route('admin.authors.destroy', ['author' => $author])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('admin.authors.edit', ['author' => $author])}}" class="btn btn-primary">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
    </div>
@endforeach
