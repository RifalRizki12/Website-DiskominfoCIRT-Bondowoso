<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostVidio;
use App\Models\Category;
use App\Models\Tag;
use Auth;
use Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $postsVidio = PostVidio::all();
        return view('vAdmins.vPosts.index',compact(['posts','postsVidio']));
    }

    public function allPosts()
    {
        $posts = Post::all();
        return view('vAdmins.vPostAll.index',compact(['posts']));
    }

    public function create()
    {
        $tags = Tag::all();
        $category = Category::all();
        return view('vAdmins.vPosts.addPost',compact(['category','tags']));
    }

    public function up(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'content' => 'required',
            'thumbnail' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $post = new Post;
        $post->status = 'aktif';
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
        
        return redirect('posts')->with('sukses','Post Baru Berhasil Dibuat');
    }

    public function edit($id)
    {
        $category = Category::all();
        $tags = Tag::all();
        $posts = Post::find($id);
        return view('vAdmins.vPosts.editPost',compact(['posts','category','tags']));
    }

    public function update(Request $request,$id)
    {
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category_id;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/thumbnail');
            $file->move($destinationPath, $fileName);

            $oldFilename = $post->thumbnail;
            \Storage::delete($oldFilename);
            $post->thumbnail = $fileName;
        }
        $post->save();
        $post->tags()->sync($request->tags);
        return redirect('posts')->with('update','Post Baru Berhasil Di Edit');
    }

    public function delete($id)
    {
        $data = Post::where('id',$id)->first();
        Storage::delete($data->thumbnail);
        $data->tags()->detach();
        $data->delete();
        return redirect()->back()->with('delete','Postingan Berhasil Dihapus');
    }

}
