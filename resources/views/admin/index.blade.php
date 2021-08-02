<x-admin-layout>
    <main role="main">
        <div class="container">
            <x-flash-info></x-flash-info>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="/admin/summaries/create" class="btn btn-primary">Add new post</a>
                            <a href="/admin/tags/create" class="btn btn-primary ml-2">Add new tag</a><!--tag-->
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <p><u>Summaries:</u></p>
                        <x-summary-overview></x-summary-overview>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-admin-layout>
