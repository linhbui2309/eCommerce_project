<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'address2',
        'birthday',
        'language',
        'skill',
        'avatar',
        'description',
        'phone_numbers',
        'occupation'
        ];

    protected $hidden = [
        'password',
        'remember_token',
        ];
}
