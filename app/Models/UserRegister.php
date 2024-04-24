<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    use HasFactory;
    protected $table = 'user_register';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'phone', 'image',
    ];
}
