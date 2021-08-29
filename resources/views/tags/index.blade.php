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
@section('scripts')
    <script>
        document.querySelectorAll('.card-img').forEach( elem => {

            let R = Math.floor((Math.random() * 127) + 127);
            let G = Math.floor((Math.random() * 127) + 127);
            let B = Math.floor((Math.random() * 127) + 127);

            let rgb = (R << 16) + (G << 8) + B;

            let pastel = `#${rgb.toString(16)}`;
            elem.setAttribute('fill', pastel);
        })
    </script>
@endsection
</x-layout>
