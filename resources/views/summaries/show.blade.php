<x-layout>
    <main role="main">
        <x-tag-dropdown />
        <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="row">
                            <a href="/">Back to overview</a>
                        </div>
                        <div class="row">
                            <ul style="list-style-type: none; padding: 0; margin: 0">
                            @foreach($summary->tags as $tag)
                                    <li class="py-1"><a href="/tags/{{$tag->slug}}" class="border border-info rounded pl-1 pr-1">{{$tag->tag_name}}</a></li>
                            @endforeach
                            </ul>
                        </div>
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
                        <div>{!! $summary->body !!}</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>


