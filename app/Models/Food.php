<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Food extends Model
{
    use Hasfactory;

    protected $fillable = [
        'title',
        'detail',
        'price',
        'image',
    ];
}
