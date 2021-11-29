<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    use HasFactory;
    protected $table = 'post2s';
    public function comment2s()
    {
        return $this->hasMany('App\Models\Comment2');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
