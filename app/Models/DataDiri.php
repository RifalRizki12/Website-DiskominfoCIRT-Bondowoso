<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    protected $table = 'datadiri';
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','jenis_kelamin','alamat','agama','avatar','user_id','nohp'];

    // public function getAvatar()
    // {
    //     if(!$this->avatar){
    //         return asset ('images/profile/default.jpg');
    //     }
    //     return asset('images/profile/data-diri/'.$this->avatar);
    // }
    public function getAvatar()
    {
        if ($this->avatar) {
            return asset('avatar/'.$this->avatar);
        }else {
            return asset('images/profile/default.jpg');
        }
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
