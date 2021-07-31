<x-admin-layout>
    <main role="main">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <a href="/admin">Back to dashboard</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6">
                    <form method="POST" action="/admin/tags" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
