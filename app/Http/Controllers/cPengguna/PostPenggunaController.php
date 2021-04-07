<?php

namespace App\Http\Controllers\cPengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostPenggunaController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('vAdmins.vPostClient.index',compact(['posts']));
    }
}
