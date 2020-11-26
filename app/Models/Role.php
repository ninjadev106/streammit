<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',  
    ];  

    protected $table = 'si_roles';

    public function users() {
        return $this->belongsToMany(User::class, 'si_users_roles');
    }
}
