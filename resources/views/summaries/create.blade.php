<x-admin-layout>
    <main role="main">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <a href="/admin">Back to dashboard</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="author">Author(s)</label>
                            <input type="text" class="form-control" name="author" id="author">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" class="form-control" name="tag" id="tag">
                        </div>
                        <div class="form-group">
                            <label for="textArea">Body</label>
                            <textarea class="form-control" name="textArea" id="textArea"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
