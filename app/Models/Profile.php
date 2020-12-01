<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'image',
        'city',
        'gender',
        'birthDate',
        'marital',
        'country',
        'state',
        'address',
        'mobileNo'
    ];

    protected $table="si_users_profiles";
}
