<x-admin-layout>
    <main role="main">
        <div class="container">
            <x-flash-info></x-flash-info>
            <div class="row mt-4">
                <div class="col">
                    <a href="/admin">Back to admin</a>
                </div>
            </div>
            <section>
                <div class="row my-4">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{route('summaries.create')}}" class="btn btn-primary">Add new summary</a>
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
