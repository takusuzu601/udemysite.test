<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR=1;
    const REVISION=2;
    const PUBLICADO=3;

    // 1対多　リレーション

    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    // 1対多 リレーション　逆から

    public function teacher(){
        return $this->belongsTo('App\Models\User');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    //多対多　リレーション　

    public function students(){
        return $this->belongsToMany('App\Models\User');
    }
}
