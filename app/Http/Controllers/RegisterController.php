<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show(){
        return view("index");
    }

    public function register(Request $req){
        // return $req;

        $req->validate(
            [
                "email"=>"required|string|unique:users|email",
                "password"=>"required|string|min:8"
            ]
        );
        try {
            $user=User::create([
                "name"=>$req->name,
                "email"=>$req->email,
                "password"=>Hash::make($req->password)
            ]);

            auth()->login($user);
            return redirect()->route("dashboard");
        } catch (\Throwable $th) {
            return "hhhhhhhhhhhh";
        }

    }
}
