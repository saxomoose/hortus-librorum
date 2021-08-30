<x-admin-layout>
    <main role="main">
        <div class="container">
            <x-flash-info></x-flash-info>
            <div class="row mt-4">
                <div class="col">
                    <a href="/admin">Retour à la page admin</a>
                </div>
            </div>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('admin.authors.create')}}" class="btn btn-primary">Ajouter un nouvel auteur</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <p><u>Auteurs:</u></p>
                        <x-author-overview></x-author-overview>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
