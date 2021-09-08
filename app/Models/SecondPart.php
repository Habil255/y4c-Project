<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPart extends Model
{
    use HasFactory;
    protected $table='second_parts';
    protected $fillable=[
        'heading1','description1','image1','list1','list2','list3','list4',
        'heading2','description2','image2','list_1','list_2','list_3','list_4',
    ];
}
