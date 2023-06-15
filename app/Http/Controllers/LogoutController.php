<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $req){
        auth()->logout();
        $req->session()->flush();
        $req->session()->regenerateToken();
        return redirect()->route("index");
    }
}
