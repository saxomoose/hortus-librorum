<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('tags.index')}}">Back to dashboard</a>
                </div>
            </div>
            <section>
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
            </section>
        </div>
    </main>
</x-admin-layout>