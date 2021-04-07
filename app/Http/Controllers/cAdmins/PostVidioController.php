<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostVidio;

class PostVidioController extends Controller
{
    public function index()
    {
        $posts = PostVidio::all();
        return view('vAdmins.vPostsVidio.index',compact(['posts']));
    }

    public function create()
    {
        return view('vAdmins.vPostsVidio.addPost');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'content' => 'required',
            'link' => 'required'
        ]);
        
        $post = new PostVidio;
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        $post->content = $request->content;
        $post->link = $request->link;
        $post->user_id = auth()->user()->id;
        
        $post->save();
        
        return redirect('postsVidio')->with('sukses','Post Baru Berhasil Dibuat');
    }

    public function edit($id)
    {
        $posts = PostVidio::find($id);
        return view('vAdmins.vPostsVidio.editPost',compact(['posts']));
    }

    public function update(Request $request,$id)
    {
        
        $post = PostVidio::find($id);
        $post->title = $request->title;
        $post->link = $request->link;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;

        $post->save();
        return redirect('postsVidio')->with('update','Post Baru Berhasil Di Edit');
    }

    public function delete($id)
    {
        $data = PostVidio::where('id',$id)->first();
        
        $data->delete();
        return redirect()->back()->with('delete','Postingan Berhasil Dihapus');
    }
}
