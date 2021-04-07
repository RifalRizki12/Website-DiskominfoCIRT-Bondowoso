<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            // return redirect('/dashboard');
            alert()->success('Kamu Berhasil Masuk :)', 'Welcome :)');
            return redirect('/check');
        }
        
        return redirect('/login');
    }

    public function register()
    {
        return view('auths.register');
    }
    
    public function postregister(Request $request)
    {
        $this->validate($request,[
            'nama_depan' => 'required|min:2',
            'email' => 'required|email|unique:users',
        ]);

        //input pendaftar sebagai user dulu
        $user = new \App\User;
        $user->role = 'client';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel data diri
        $request->request->add(['user_id' => $user->id ]);
        $datadiri = \App\Models\DataDiri::create($request->all());
        $datadiri->save();

        alert()->success('Kamu Berhasil Register :)', 'Terimakasih');
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        alert()->success('Kamu Telah Keluar :)', 'Good bye!');
        return redirect('/login');
    }
    
}
