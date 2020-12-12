<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\State;
use App\Models\Membership;
use App\Models\Profile;

class UserService extends BaseService
{
	public function __construct()
	{

	}

	public function getAll()
	{
        return User::all();
    }
    public function getActiveUsers($id = null)
    {
        if ($id)
            return User::where(['status' => 1, 'id' => $id])->get();
        $users = User::where(['status' => 1])->get();
        $data = [];
        foreach ($users as $user)
        {
            if ($user->roles[0]->slug != 'admin')
                $data[] = $user;
        }
        return $data;
    }
	public function getById($id)
	{
        return User::find($id);
	}

    public function getAdmin()
    {
        $admin_role = Role::where('slug', 'admin')->first();
        return $admin_role->users[0];
    }

    public function aaa()
    {
        $memships = Membership::all();
        foreach ($memships as $memship)
        {
            $memship->userCount = count($memship->users);
        }
        return $memships;
    }

	public function create($data)
	{
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'joinDate' => date('Y-m-d'),
            'status' => 0
        ]);

        // Assign customer role
        $customer_role = Role::where('slug', 'customer')->first();
        $user->roles()->attach($customer_role);

        // Assign basic membership
        $free_memship = Membership::where('name', 'Free Trial')->first();
        $user->memships()->attach($free_memship);
        foreach ($user->memships as $memship) {
            $memship->pivot->updated_at = date('Y-m-d');
            $memship->pivot->save();
        }
        // Create user profile
        $profile = Profile::create([
            'user_id' => $user->id
        ]);

        return $user;
	}

	public function update($id, $data)
	{
        $user = $this->getById($id);
        return $user->update($data);
	}

    public function updateProfile($id, $data)
    {
        $user = $this->getById($id);
        return $user->profile->update($data);
    }
	public function delete($id)
	{
		$user = $this->getById($id);
		return $user->delete();
	}

	public function search($keyword, $attributes, $user)
	{

    }

    public function blockUser($id) {
        $user = $this->getById($id);
        return $user->update(['status' => 2]);
    }
    public function getReferences()
    {
        $countries = Country::all();
        $states = State::all();
        return ['countries' => $countries, 'states' => $states];
    }
}
