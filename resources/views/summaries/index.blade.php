
<x-layout>
    @include('summaries._header')

    <main role="main">

    @if($summaries->count() > 1)
        <section class="jumbotron text-center">
            <div class="container">
                <a href="#" class="border border-info rounded offset-8 pl-1 pr-1">{{$summaries[0]->tag->tag_name}}</a>
                <h1 class="mt-1">{{$summaries[0]->title}}</h1>
                <p><small class="text-muted">By {{$summaries[0]->author->name}}</small>
                <small class="text-muted p-3">Published <time>{{$summaries[0]->created_at->diffForHumans()}}</time></small></p>
                <p class="lead text-muted">{!! $summaries[0]->excerpt !!}</p>
                <a href="#" class="btn btn-primary my-2">Continue reading</a>
                </div>
            </div>
        </section>
        <div class="album py-3 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($summaries->skip(1) as $summary)
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{$summary->title}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">By {{$summary->author->name}}</small>
                                    <a href="#" class="border border-info rounded pl-1 pr-1">{{$summary->tag->tag_name}}</a>
                                </div>
                                <p class="card-text">{!! $summary->excerpt !!}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-primary">View</a>
                                    <small class="text-muted">Published <time>{{$summaries[0]->created_at->diffForHumans()}}</time></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    @else
        <p class="text-center">No summaries yet available.</p>
    @endif
    </main>
</x-layout>
