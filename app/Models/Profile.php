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

    public function country_record()
    {
        return $this->hasOne(Country::class, 'id', 'country');
    }

    public function state_record()
    {
        return $this->hasOne(State::class, 'id', 'state');
    }
}
