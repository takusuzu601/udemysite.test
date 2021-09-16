<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    // 1対1 逆
    public function lesson(){
        return $this->belongsTo('App\Models\lesson');
    }
}
