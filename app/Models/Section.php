<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    // 1対多

    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }

    // 1対多　逆
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
