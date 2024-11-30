<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Explorer extends Model
{
    protected $fillable = [
        'name',
        'identification',
        'email'
    ];
}
