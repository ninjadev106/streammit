<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Membership;
class RoleController extends Controller
{
    //
    public function make_roles() {
        // Get admin user
        // $user = User::where('name', 'Antony Tomas')->first();
        $user = User::where('name', 'Aristo')->first();
        /************ Assign role ************/
        $admin_role = Role::where('slug', 'admin')->first();
        $user->roles()->attach($admin_role);
        /************ Assign membership ************/
        $basic_membership = Membership::where('name', 'Basic')->first();
        $user->memships()->attach($basic_membership);
        foreach ($user->memships as $memship) {
            $memship->pivot->updated_at = date('Y-m-d');
            $memship->pivot->save();
        }
        exit();     
    }
}
