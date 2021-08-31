@if (session('status'))
    <div class="mt-sm-2">
        <div class="alert alert-success alert-dismissible" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
