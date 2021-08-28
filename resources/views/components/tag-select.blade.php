<div class="form-group col-sm-6">
    <label for="tagSelect">Tag(s)</label>
    <select class="form-control" name="tags[]" id="tagSelect" multiple required>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
</div>
