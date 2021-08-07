<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('authors.index')}}">Back to dashboard</a>
                </div>
            </div>
            <section>
                <div class="row my-4 pb-4">
                    <div class="col-sm-6">
                        <form method="POST" action="{{route('authors.update', ['author' => $author])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Author name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{$author->name}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
