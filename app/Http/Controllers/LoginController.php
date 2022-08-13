<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login form
    public function login_form_get() {
        if (Auth::user()) {
            return redirect(route('dashboard.dashboard_get'));
        }
        else {
            return view('login');
        }
    }
    public function login_form_post(Request $request) {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard.dashboard_get'));
        }
        else {
            abort(404);
        }
    }





}
