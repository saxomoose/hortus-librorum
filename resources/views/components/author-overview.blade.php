@foreach($authors as $author)
    <div class="d-flex">
        <div class="mr-3">{{$author->id}}</div>
        <div class="flex-fill">{{$author->name}}</div>
        <div class="ml-auto">
            <button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button>
        </div>
    </div>
@endforeach
