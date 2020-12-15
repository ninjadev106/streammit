<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Tymon\JWTAuth\Contracts\JWTSubject;

use App\Traits\HasRolesTrait;
use App\Traits\HasMemshipTrait;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, HasRolesTrait, HasMemshipTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lang',
        'facebookLink',
        'twitterLink',
        'googleLink',
        'instagramLink',
        'youtubeLink',
        'joinDate',
        'status',
        'device_token'
    ];  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $table = 'si_users';
    
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
    
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }    
}