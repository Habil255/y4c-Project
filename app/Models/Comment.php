<?php

namespace App\Models;
use App\Models\Blogpost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    
    public function post(){

        return $this->belongsTo(Blogpost::class);
    }
}
