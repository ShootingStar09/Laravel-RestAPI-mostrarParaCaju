<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller{

    public function showLogin (){

        if (Auth::check()){
            return Redirect::to('/admin');
        }
        return view('admin/login');
    }

    public function postLogin(){

        $data = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt($data, Input::get('remember')))
        {

            return Redirect::intended('home');
        }

        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

    public function logOut(){
        Auth::logout();
        return Redirect::to('admin/login')->with('error_message', 'Logged out correctly');
    }
}

?>
