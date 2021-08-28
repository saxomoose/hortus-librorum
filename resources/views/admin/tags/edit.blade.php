<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('admin.tags.index')}}">Back to dashboard</a>
                </div>
            </div>
            <section>
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <form method="POST" action="{{route('admin.tags.update', ['tag' => $tag])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Tag name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$tag->name}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
