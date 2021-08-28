<div class="form-group col-sm-6">
    <label for="authorSelect">Author(s)</label>
    <select class="form-control" name="authors[]" id="authorSelect" multiple required>
        @foreach($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
        @endforeach
    </select>
</div>
