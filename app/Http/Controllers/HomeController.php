<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login_get()
    {
        return view('login');
    }
    public function login_post()
    {

    }


    public function register_get()
    {
        return view('register');
    }
    public function register_post(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->my_file = $request->my_file;

        $user->save();
        return redirect(route('index'));
    }




}
