<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{route('admin.authors.index')}}">Retour au tableau de bord</a>
                </div>
            </div>
            <section>
                <div class="row my-4 pb-4">
                    <div class="col-sm-6">
                        <form method="POST" action="{{route('admin.authors.update', ['author' => $author])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Nom de l'auteur</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$author->name}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
