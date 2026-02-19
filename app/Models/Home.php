<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'profiless';
    protected $fillable = [
        'full_name',
        'title',
        'bio',
        'email',
        'location'
    ];
}
