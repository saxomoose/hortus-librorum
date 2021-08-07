<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('summaries.index')}}">Back to dashboard</a>
                </div>
            </div>
            <div class="row my-4 pb-4">
                <div class="col">
                    <form method="POST" action="{{route('summaries.store')}}" enctype="multipart/form-data">
                        @csrf
                        <x-author-select></x-author-select>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="publication_year">Publication year</label>
                            <input type="number" step="1" class="form-control" name="publication_year" id="publication_year" required>
                        </div>
                        <x-tag-select></x-tag-select>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control" name="excerpt" id="excerpt" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
