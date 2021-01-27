<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function getRegister()
    {
        return view('page/register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed' // field_confirmation
        ]);

        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();

        // return redirect()->route('login');    /untuk menampilkan ke route dengan name(login)
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
