@foreach($tags as $tag)
    <div class="d-flex">
        <div class="mr-3">{{$tag->id}}</div>
        <div class="flex-fill">{{$tag->name}}</div>
        <div class="ml-auto">
            <button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button>
        </div>
    </div>
@endforeach
