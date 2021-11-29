<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment2 extends Model
{
    use HasFactory;
    protected $table = 'comment2s';
    public function post2s()
    {
        return $this->belongsTo('App\Models\Post2');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
