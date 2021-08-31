<x-admin-layout>
    <main role="main">
        <div class="container">
            <div class="row mt-sm-4">
                <div class="col">
                    <a href="{{route('admin.authors.index')}}">Retour au tableau de bord</a>
                </div>
            </div>
            <section>
                <div class="row my-sm-4 pb-sm-4">
                    <div class="col-sm-6">
                        <form method="POST" action="{{route('admin.authors.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom de l'auteur</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
