<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserService;
class UserController extends Controller
{
    //
    protected $userService;

    public function __construct(UserService $userService)
    {   
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->getAll();
        return view('user.index', compact('users'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $success = $this->userService->update($id, $data);
        return response()->json(['success' => $success]);
    }
    
    public function destroy($id)
    {
        $this->movieService->delete($id);
        return redirect()->route('admin.movie.index');
    }
}
