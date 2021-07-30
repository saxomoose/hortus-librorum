<x-layout>
    <main role="main">
        <x-tag-dropdown />
        <section>
            <div class="album py-3 bg-light">
                <div class="container">
                    <div class="row">
                        @foreach($summaries as $summary)
                            <x-summary-card :summary="$summary" />
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
