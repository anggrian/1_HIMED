<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {

        return view('Backend_admin.Layout.layout');
    }

    public function getLogin()
    {
        return view('Backend_admin.User_admin.login');
    }
    public function postLogin(Request $request)
    {
        if (Auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }
        return redirect()->route('home');
    }

    public function getRegister()
    {
        return view('Backend_admin.User_admin.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6' // field_confirmation
        ]);

        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
    }

    public function logout()
    {
        Auth()->logout();

        return redirect()->route('login');
    }
}
