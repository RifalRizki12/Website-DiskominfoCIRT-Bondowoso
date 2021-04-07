<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class DashboardController extends Controller
{
    public function index()
    {
        return view('vAdmins.dashboard');
    }

    public function check()
    {
        if (auth()->user()->role == 'admin utama'||auth()->user()->role == 'admin') {
            alert()->success('Kamu Berhasil Masuk :)', 'WELCOME :)');
            return redirect('/posts');
        }
        return redirect('/');
    }
}
