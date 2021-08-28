<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function manage2FA() {
        return view('auth.2fa.index');
    }

/*    public function recover2FA() {
        return view('auth.2fa.recover');
    }*/
}
