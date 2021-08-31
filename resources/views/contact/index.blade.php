<x-layout>
    <div class="container mt-sm-4">
        @if(session('message'))
            <div class='alert alert-success alert-dismissible'>
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>Ce formulaire permet d'adresser un message à l'auteur des articles. N'hésitez pas à partager vos réflexions concernant ce blog.</p>
        <form method="POST" action="/contact">
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="name">Prénom et nom</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="e.g. email@example.com" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="body">Message</label>
                    <textarea class="form-control bg-white" name="body" id="body" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</x-layout>
