<div class="d-flex justify-content-start m-2">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tags
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($tags as $tag)
                <a class="dropdown-item" href="/tags/{{$tag->slug}}">{{$tag->tag_name}}</a>
            @endforeach
        </div>
    </div>
</div>
