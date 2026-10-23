<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'specs',
        'price',
        'image',
        'category',
    ];
}
