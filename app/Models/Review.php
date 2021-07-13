<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // 1対多リレーション　逆から

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
