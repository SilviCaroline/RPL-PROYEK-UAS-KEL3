<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [

        'member_code',
        'name',
        'email',
        'password',
        'role',
        'phone',
        'address',
        'status',
    ];
     protected $hidden = [
        'password'
     ];
}