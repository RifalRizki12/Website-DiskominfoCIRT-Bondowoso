<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('vHomes.home',compact(['posts']));
    }

    public function blog()
    {
        return view('vHomes.blog');
    }

    public function post()
    {
        $tags = Tag::all();
        $category = Category::all();
        return view('vHomes.vPost.post',compact('tags','category'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'content' => 'required',
            'thumbnail' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $post = new Post;
        $post->status = 'nonaktif';
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category_id;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/thumbnail');
            $file->move($destinationPath, $fileName);
            $post->thumbnail = $fileName;
        }
        $post->save();
        $post->tags()->sync($request->tags);
        
        return redirect()->back()->with('sukses','Post Baru Berhasil Dibuat');
    }

}
