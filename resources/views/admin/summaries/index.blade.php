<x-admin-layout>
    <main role="main">
        <div class="container">
            <x-flash-info></x-flash-info>
            <div class="row mt-sm-4">
                <div class="col">
                    <a href="{{route('admin.index')}}">Retour à la page admin</a>
                </div>
            </div>
            <section>
                <div class="row my-sm-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('admin.summaries.create')}}" class="btn btn-primary">Ajouter un nouvel article</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row my-sm-4">
                    <div class="col">
                        <p><u>Articles:</u></p>
                        <x-summary-overview></x-summary-overview>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
