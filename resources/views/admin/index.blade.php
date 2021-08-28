<x-admin-layout>
    <main role="main">
        <div class="container">
            <section>
                <div class="row my-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('admin.summaries.index')}}" class="btn btn-primary">Manage summaries</a>
                            <a href="{{route('admin.tags.index')}}" class="btn btn-primary ml-2">Manage tags</a>
                            <a href="{{route('admin.authors.index')}}" class="btn btn-primary ml-2">Manage authors</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
