<x-admin-layout>
    <main role="main">
        <div class="container mt-sm-4">
            <div class="card login-card">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            @if(! auth()->user()->two_factor_secret)
                                <div class="card-text">
                                    <p>You have not enabled two-factor authentication.</p>
                                    <form method="POST" action="{{route('two-factor.enable')}}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            Enable
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="card-text">
                                    <p>You have two-factor authentication enabled.</p>
                                    <form method="POST" action="{{route('two-factor.disable')}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">
                                            Disable
                                        </button>
                                    </form>
                                </div>
                            @endif

                            @if(session('status')  == 'two-factor-authentication-enabled')
                                <div class="row mt-sm-2">
                                    <div class="col-sm-8">
                                        <p>Two-factor authentication is enabled, please scan the QR code into an authenticator application.</p>
                                        {!! auth()->user()->twoFactorQrCodeSvg()!!}
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Store these recovery codes safely.</p>
                                        @foreach((array) auth()->user()->recoveryCodes() as $code)
                                            {{ trim($code) }} <br>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
