<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req){
        // dd(Auth::attempt(['email' => $req->email, 'password' => $req->password]));
        // dd(auth()->user());
        // return $req;
        $req->validate(
            [
                "email"=>"required|email",
                "password"=>"required|string|min:8"
            ]
        );
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $req->session()->regenerate();
            return redirect()->route("dashboard");
        }else {
            return redirect()->route("index")->withError(["error"=>"your email or password is invalid"]);
        }

    }
}
