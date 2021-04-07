<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataDiri;

class DataClientController extends Controller
{
    public function index()
    {
        $data_diri = DataDiri::all();

        return view('vAdmins.vClients.dataClient',compact(['data_diri']));
    }

    public function add(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            // 'avatar' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        //insert ke tabel Users
        $user = new \App\User;
        $user->role = 'client';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel control
        $request->request->add(['user_id' => $user->id ]);
        $datadiri = \App\models\DataDiri::create($request->all());
        // if($request->hasFile('avatar')){
        //     $request->file('avatar')->move('images/profile/data-diri/',$request->file('avatar')->getClientOriginalName());
        //     $datadiri->avatar = $request->file('avatar')->getClientOriginalName();
        //     $datadiri->save();
        // }
        $datadiri->save();

        return redirect('/dataClient');
    }

    public function edit($id)
    {
        $client = \App\Models\DataDiri::find($id);
        return view('vAdmins.vClients.editClient',['client'=>$client]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $client = \App\Models\DataDiri::find($id);
        \App\User::find($client->user_id)->update(['email'=>$request->email]);
        $data=$request->all();
        // unset($data['email']);
        $client->update($data);
        // if($request->hasFile('avatar')){
        //     $request->file('avatar')->move('images/profile/data-diri/',$request->file('avatar')->getClientOriginalName());
        //     $client->avatar = $request->file('avatar')->getClientOriginalName();
        // }
        $client->save();
        return redirect('dataClient');
    }

    public function delete($id)
    {
        $data = DataDiri::where('id',$id)->first();
        $user = \App\User::find($data->user_id);

        $data->delete();
        $user->delete();
        return redirect()->back();
    }

}
