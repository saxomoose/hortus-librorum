<div class="position-absolute ml-2 mt-4">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($tags as $tag)
                <a class="dropdown-item" href="/tags/{{$tag->slug}}">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</div>

