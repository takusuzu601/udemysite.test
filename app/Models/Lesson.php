<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    // 1対1
    public function description(){
        return $this->hasOne('App\Models\Description');
    }
    // 1対多　逆
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }
    
    // 多対多　
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    // 1対1 ポリモーフィック
   public function resource(){
       return $this->morphOne('App\Models\Resource','resourceable');
   }

   //1対多　ポリモーフィック
   public function comments(){
       return $this->morphMany('App\Models\Comment','commentable');
   }
   public function reactions(){
       return $this->morphMany('App\Models\Reaction','reactionable');
   }
}
