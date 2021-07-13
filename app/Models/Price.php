<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    // 1対多
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
