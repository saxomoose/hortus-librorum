<x-layout>
@section('stylesheets')
        <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
    <x-tag-dropdown />
    <main role="main">
        <div class="container my-sm-4">
            <div class="row" >
                <div class="col-sm-2">
                    <a href="{{route('index')}}">Retour à la page principale</a>
                    <ul style="list-style-type: none; padding: 0; margin: 0">
                    @foreach($summary->tags as $tag)
                            <li class="py-1"><a href="{{route('tags.show', ['tag' => $tag])}}" class="border border-info rounded pl-sm-1 pr-sm-1">{{$tag->name}}</a></li>
                    @endforeach
                    </ul>
                    <p class="my-sm-1">Article publié <time>{{\Carbon\Carbon::parse($summary->published_at)->diffForHumans()}}</time> </p>
                    @if(isset($summary->publication_year))
                            <p class="my-sm-1">Livre publié en {{$summary->publication_year}}</p>
                    @endif
                </div>
                <div class="col-sm-10">
                    <h1>{{$summary->title}}</h1>
                    <h4 class="font-italic">By
                        @foreach($summary->authors as $author)
                            @if(!$loop->last)
                                {{$author->name . ', '}}
                            @else
                                {{$author->name}}
                            @endif
                        @endforeach
                    </h4>
                    <div class="mt-sm-4">{!! $summary->lb_content !!}</div>
                </div>
            </div>
        </div>
    </main>
</x-layout>


