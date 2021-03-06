<x-admin-layout>
    <main role="main">
        <div class="container mt-sm-4">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">{{ __('Confirm Password') }}</div>

                        <div class="card-body">
                            <p>
                            {{ __('Please confirm your password before continuing.') }}
                            </p>
                            <form method="POST" action="{{ url('/user/confirm-password') }}"><!--default route('password.confirm')-->
                                @csrf

                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-sm-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-sm-0">
                                    <div class="col-sm-8 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Confirm Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>

