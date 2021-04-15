<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Support\Facades\Redirect;



class HalamanController extends Controller
{
    public function halamanlogin()
    {
        return view('login');
    }


    public function proseslogin(Request $res)
    {
        if (Auth::attempt($res->only(['email', 'password']))) {
            return redirect('dashboard');
        } else {
            return redirect('/')->with('login', 'Email atau Password salah');
        }
    }


    public function dashboard()
    {
        return view('dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Anda Berhasil Keluar');
    }
}
