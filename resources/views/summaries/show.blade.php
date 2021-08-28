<x-layout>
    <x-tag-dropdown />
    <main role="main">
        <div class="container mt-4">
            <div class="row" >
                <div class="col-sm-2">
                    <a href="/">Back to overview</a>
                    <ul style="list-style-type: none; padding: 0; margin: 0">
                    @foreach($summary->tags as $tag)
                            <li class="py-1"><a href="/tags/{{$tag->slug}}" class="border border-info rounded pl-1 pr-1">{{$tag->name}}</a></li>
                    @endforeach
                    </ul>
                    <p class="my-1">Summary published <time>{{\Carbon\Carbon::parse($summary->published_at)->diffForHumans()}}</time> </p>
                    <p class="my-1">Book published in {{$summary->publication_year}}</p>
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
                    <div class="mt-4">{!! $summary->lb_content !!}</div>
                </div>
            </div>
        </div>
    </main>
</x-layout>


