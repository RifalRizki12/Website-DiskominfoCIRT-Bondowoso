<?php

namespace App\Http\Controllers\cPengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostVidio;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->input('search');
        $posts = Post::where('title','Like','%'.$cari. '%')->get();
        $postsVidio = PostVidio::where('title','Like','%'.$cari. '%')->get();
        return view('vHomes.cari',compact(['posts','postsVidio']));
    }
}
