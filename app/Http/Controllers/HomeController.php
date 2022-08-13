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

        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
        }


        $user = new User();
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // if($request->file('my_file'))
        // {
        //     $image = $request->file('my_file');
        //     $image_name = uniqid() .'.'. $image->extension();
        //     $image->move('./image', $image_name);
        //     $user->image_gallery = $image_name;
        // }
        $user->image_gallery = json_encode($data);
        $user->save();
        return back()->with('success', 'Your images has been successfully');
    }




}
