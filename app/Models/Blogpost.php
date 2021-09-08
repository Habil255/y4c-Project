<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;
    protected $table='blogposts';
    
    
    public function comments(){
        return $this->hasMany(Comment::class);

    }
}
