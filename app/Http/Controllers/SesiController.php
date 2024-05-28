<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect('admin/dashboard');
            }elseif(Auth::user()->role == 'dosen'){
                return redirect('dosen/dashboard');
            }elseif(Auth::user()->role == 'mahasiswa'){
                return redirect('mahasiswa/dashboard');
        } else {
            return redirect('/')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
}
}
