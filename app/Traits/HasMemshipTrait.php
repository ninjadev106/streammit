<?php

namespace App\Traits;

use App\Models\Membership;

trait HasMemshipTrait {
  public function memships() {
    return $this->belongsToMany(Membership::class,'si_users_memships', 'user_id', 'memship_id');
  }
}