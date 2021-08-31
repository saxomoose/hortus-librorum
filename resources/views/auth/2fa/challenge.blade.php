<x-admin-layout>
    <main role="main">
        <div class="container mt-sm-4">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">{{ __('Two-factor challenge') }}</div>

                        <div class="card-body">
                            {{ __('Please enter your two-factor authentication code before continuing.') }}

                            <form method="POST" action="{{ url('two-factor-challenge') }}"><!--default route('password.confirm')-->
                                @csrf

                                <div class="form-group row">
                                    <label for="code" class="col-sm-4 col-form-label text-md-right">{{ __('Code') }}</label>

                                    <div class="col-sm-6">
                                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-password">

                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-sm-0">
                                    <div class="col-sm-8 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
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

