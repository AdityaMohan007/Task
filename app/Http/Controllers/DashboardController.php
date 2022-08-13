<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard_get() {
        if (Auth::user()->role == 'admin') {
            return view('Dashboard.admin');
        }
        if (Auth::user()->role == 'user') {
            return view('Dashboard.user');
        }
        else {
            abort(404);
        }
    }






}
