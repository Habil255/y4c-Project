<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;
    protected $table='home_contents';
    protected $fillable=[
        'heading','description','background_image','status'
    ];
}
