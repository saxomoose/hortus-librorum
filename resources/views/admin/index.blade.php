<x-admin-layout>
    <main role="main">
        <div class="container">
            <section>
                <div class="row my-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('summaries.index')}}" class="btn btn-primary">Manage summaries</a>
                            <a href="{{route('tags.index')}}" class="btn btn-primary ml-2">Manage tags</a>
                            <a href="{{route('authors.index')}}" class="btn btn-primary ml-2">Manage authors</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
