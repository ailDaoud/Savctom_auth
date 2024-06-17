<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authmodel extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
