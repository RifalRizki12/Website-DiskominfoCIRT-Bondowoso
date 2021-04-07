<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $dates = ['created_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function thumbnail()
    {
        if ($this->thumbnail) {
            return asset('thumbnail/'.$this->thumbnail);
        }else {
            return asset('/images/no-thumbnail.png');
        }
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d M Y , H:i:s');
    }

    public function getCreatedAttribute2()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l , d M Y , H:i:s');
    }
    
    public function getUpdatedAttribute2()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l , d M Y , H:i:s');
    }
}
