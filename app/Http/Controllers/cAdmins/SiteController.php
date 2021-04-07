<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostVidio;

class SiteController extends Controller
{
    public function about()
    {
        return view('vHomes.about');
    }

    public function kontak()
    {
        return view('vHomes.kontak');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        $category = Category::all();
        $tags = Tag::all();
        
        return view('vHomes.blog',compact(['posts','category','tags']));
    }

    public function blogGird()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(9);
        return view('vHomes.blogGird',compact(['posts']));
    }

    public function singlepost($slug)
    {
        $post = Post::where('slug','=',$slug)->first();
        $category = Category::all();
        $tags = Tag::all();
        return view('vHomes.blogSingle',compact(['post','category','tags']));
    }
    public function vidio()
    {
        $posts = PostVidio::orderBy('created_at','desc')->paginate(9);
        return view('vHomes.vVidio.index',compact(['posts']));
    }
}
