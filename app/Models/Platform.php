<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded=['id'];

        // 1対多

        public function lessons(){
            return $this->hasMany('App\Models\Lesson');
        }
}
