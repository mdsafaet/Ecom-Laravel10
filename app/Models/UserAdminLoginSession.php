<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdminLoginSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'sl',
        'device',
        'accestoken',
        'timelimit',

    ];

}
