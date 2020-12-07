<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'feePerMonth',
        'multiLoginCount',
        'unLimitContent',
        'enbAllDevice',
        'enbHDQuality',  
        'enbUHDQuality',
    ];  

    protected $table = 'si_membership';

    public function users() {
        return $this->belongsToMany(User::class, 'si_users_memships', 'memship_id', 'user_id');
    }
}
