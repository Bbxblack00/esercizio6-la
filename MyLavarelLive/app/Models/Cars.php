<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'displacement',
        'max_speed',
    ];
}