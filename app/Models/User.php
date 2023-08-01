<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use HasFactory, HasApiTokens, Notifiable;
    protected $guard = 'admin';
    protected $table = 'users';
    protected $fillable = ['username','name','password','role'];

  
}
