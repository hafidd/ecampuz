<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function store()
    {
        $fields = request()->validate([
            "username" => "required|min:3|max:16|unique:users",
            "password" => "required|min:6|confirmed"
        ]);

        $fields["password"] = bcrypt($fields["password"]);
        $user = User::create($fields);

        Auth::login($user);

        return redirect("/instansi")->with("message", "sukses login");
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function auth()
    {
        $fields = request()->validate([
            "password" => "required",
            "username" => "required",
        ]);

        if (Auth::attempt($fields)) {
            request()->session()->regenerate();

            return redirect("/instansi")->with("message", "Login sukses");
        }

        return back()->withErrors(['email' => 'user/Password salah'])->onlyInput('username');
    }
}
