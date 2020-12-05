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
        // return [
        //     [
        //         'id' => 1,
        //         'name' => 'Sava Grujic',
		// 		'email' => 'sava.grujic.thunder@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 3,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 4,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 5,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 6,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 7,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 8,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 9,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 10,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 11,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 12,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 13,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 14,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 15,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 16,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 17,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 18,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
		// 	],
		// 	[
        //         'id' => 19,
        //         'name' => 'Aristo',
		// 		'email' => 'aristo@gmail.com',
		// 		'mobileNo' => '0123858234',
        //         'country' => 'India',
        //         'status' => 'Active',
        //         'profileImage' => '01.jpg',
        //         'joinDate' => '21 Jul, 2020'
        //     ],
        // ];  
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
        $basic_memship = Membership::where('name', 'Basic')->first();
        $user->memships()->attach($basic_memship);
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

    public function getReferences()
    {
        $countries = Country::all();
        $states = State::all();
        return ['countries' => $countries, 'states' => $states];
    }
}
