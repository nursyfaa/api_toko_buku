<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'id', 'username', 'password', 'nama', 'role',
    ];
}
