<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataDiri;
use App\Models\Post;
use Auth;
use Storage;

class DataAdminController extends Controller
{
    public function index()
    {
        $data_diri = DataDiri::all();

        return view('vAdmins.dataAdmin',compact(['data_diri']));
    }

    public function add(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            // 'avatar' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        //insert ke tabel Users
        $user = new \App\User;

        if (Auth::user()->role=='admin utama') {
            $user->role = $request->role;
        } elseif (Auth::user()->role=='admin') {
            $user->role = 'admin';
        }
        
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel control
        $request->request->add(['user_id' => $user->id ]);
        $datadiri = \App\Models\DataDiri::create($request->all());

        $datadiri->save();

        return redirect('/dataAdmin')->with('sukses','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $admin = \App\Models\DataDiri::find($id);
        return view('vAdmins.editAdmin',compact(['admin']));
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $admin = \App\Models\DataDiri::find($id);
        \App\User::find($admin->user_id)->update(['email'=>$request->email]);
        $data=$request->all();
        // unset($data['email']);
        $admin->update($data);
        // if($request->hasFile('avatar')){
        //     $request->file('avatar')->move('images/profile/data-diri/',$request->file('avatar')->getClientOriginalName());
        //     $admin->avatar = $request->file('avatar')->getClientOriginalName();
        // }
        $admin->save();

        return redirect('dataAdmin')->with('update','Data Berhasil Diedit');
        
    }

    public function delete($id)
    {
        $data = DataDiri::where('id',$id)->first();
        $user = \App\User::find($data->user_id);
        $post = \App\Models\Post::find($user->id);

        $data->delete();
        $user->delete();
        $post->delete();
        return redirect()->back()->with('delete','Data Berhasil Dihapus');
    }

    public function profileSaya()
    {
        $posts = Post::all();
        return view('vAdmins.profile',compact('posts'));
    }

    public function profile($id)
    {
        $data = DataDiri::where('id',$id)->first();
        $posts = Post::all();

        return view('vAdmins.adminProfile',compact(['data','posts']));
    }

}
