<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-sm-4">
                <div class="col">
                    <a href="{{route('admin.tags.index')}}">Retour au tableau de bord</a>
                </div>
            </div>
            <section>
                <div class="row mt-sm-2">
                    <div class="col-sm-6">
                        <form method="POST" action="{{route('admin.tags.update', ['tag' => $tag])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Nom de la catégorie</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$tag->name}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
