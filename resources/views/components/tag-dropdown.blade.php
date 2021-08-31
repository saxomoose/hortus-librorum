<div class="position-absolute ml-sm-2 mt-sm-4">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($tags as $tag)
                <a class="dropdown-item" href="{{route('tags.show', ['tag' => $tag])}}">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</div>

