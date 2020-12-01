<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserService;
use App\Services\FileUploadService;

class UserController extends Controller
{
    //
    protected $userService;
    protected $fileUploadService;
    public function __construct(UserService $userService, FileUploadService $fileUploadService)
    {   
        $this->userService = $userService;
        $this->fileUploadService = $fileUploadService;
    }
    public function index()
    {
        $users = $this->userService->getAll();
        return view('user.index')->with('users', $users);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $success = $this->userService->update($id, $data);
        return response()->json(['success' => $success]);
    }

    public function destroy($id)
    {
        $this->userService->delete($id);
        return redirect()->route('admin.user.index');
    }
}
