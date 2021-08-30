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
                            <a href="{{route('admin.tags.create')}}" class="btn btn-primary">Ajouter une nouvelle catégorie</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <p><u>Catégories:</u></p>
                        <x-tag-overview></x-tag-overview>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
