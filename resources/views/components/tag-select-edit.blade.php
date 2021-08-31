<div class="form-group col-sm-6">
    <label for="tagSelect">Catégorie(s)</label>
    <select class="form-control" name="tags[]" id="tagSelect" multiple required>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" {{ $isSelected($tag->id) ? 'selected' : ''}}>{{$tag->name}}</option>
        @endforeach
    </select>
</div>
