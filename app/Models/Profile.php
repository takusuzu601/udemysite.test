<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    // 1対1 リレーション　逆から

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
