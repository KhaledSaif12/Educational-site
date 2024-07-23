<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function getImageAttribute($img){
        return url('/images').'/'.$img;

    }
    public function writeru(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function writerc(){
        return $this->belongsTo(Catgory::class,'catgory_id');
    }
}
