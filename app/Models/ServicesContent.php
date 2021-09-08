<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesContent extends Model
{
    use HasFactory;
    protected $table='services_contents';
    protected $fillable=[
        'services_description','sub_heading','sub_description','icon',
    ];
}
