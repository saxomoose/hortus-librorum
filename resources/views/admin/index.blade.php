<x-admin-layout>
    <main role="main">
        <div class="container">
            <section>
                <div class="row my-sm-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('admin.summaries.index')}}" class="btn btn-primary">Gestion des articles</a>
                            <a href="{{route('admin.tags.index')}}" class="btn btn-primary ml-sm-2">Gestion des catégories</a>
                            <a href="{{route('admin.authors.index')}}" class="btn btn-primary ml-sm-2">Gestion des auteurs</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
