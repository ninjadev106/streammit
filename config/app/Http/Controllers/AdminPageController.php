<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Services\UserService;
use App\Services\FileUploadService;
use App\Rules\MatchOldPassword;

class AdminPageController extends Controller
{
    //
    protected $userService;
    protected $fileUploadService;

    public function __construct(UserService $userService, FileUploadService $fileUploadService)
    {
        $this->userService = $userService;
        $this->fileUploadService = $fileUploadService;
    }   

    public function profile_index()
    {
        $admin = $this->userService->getAdmin();
        return view('admin.profile.index')->with('user', $admin);
    }

    public function profile_edit()
    {
        $admin = $this->userService->getAdmin();
        $references = $this->userService->getReferences();
        return view('admin.profile.edit')
                    ->with('user', $admin)
                    ->with('references', $references);
    }

    public function profile_update(Request $request, $c_or_p)
    {   
        $data = $request->all();
        $admin = $this->userService->getAdmin();
        if ($c_or_p == 'contact')
        {
            $request->validate([
                'mobileNo' => 'required',
                'email' => 'required',
                'url' => 'required'
            ]);
            $admin->update(['email' => $data['email']]);
            $admin->profile->update(['mobileNo' => $data['mobileNo']]);
        }
        else if ($c_or_p == 'personal')
        {
            $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'city' => 'required',
                'gender' => 'required',
                'birthDate' => 'required',
                'marital' => 'required',
                'country' => 'required',
                'state' => 'required',  
                'address' => 'required'
            ]);
            unset($data['file']);
            if ($file = $request->file('file')) {
                $data['image'] = $this->fileUploadService->uploadImage($file);
            }
            $admin->profile->update($data);
        }
        return redirect()->route('admin.profile.index');
    }

    public function account_setting()
    {
        $admin = $this->userService->getAdmin();
        return view('admin.account.setting')->with('user', $admin);
    }

    public function account_update(Request $request, $p_or_o)
    {
        $data = $request->all();
        $admin = $this->userService->getAdmin();
        if ($p_or_o == 'password')
        {
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => 'required',
                'new_confirm_password' => 'same:new_password'
            ]);
            $admin->update(['password' => Hash::make($data['new_password'])]);
        }   
        else
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required'
            ]);
            $admin->update($data);
        }
        return redirect()->route('admin.account.setting');
    }

}
 