<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Services\UserService;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    function create() {
        $groups = Group::all();
        $roles = Role::all();
        return view('admin.users.add', compact('groups', 'roles'));
    }

    function store(Request $request) {
        // them csdl
        $this->userService->store($request);
        // quay tro lai trang d/s user
        return redirect()->route('users.index');
    }

    function edit($id) {
        $groups = Group::all();
        $roles = Role::all();
        $user = $this->userService->getById($id);
        return view('admin.users.edit', compact('groups','user','roles'));
    }

    function delete($id) {
        DB::beginTransaction();
        try {
            $user = $this->userService->getById($id);
            Storage::disk('public')->delete($user->image);
            $user->roles()->detach();
            $user->delete();
            DB::commit();
            return redirect()->route('users.index');
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
    }

    function update($id,Request $request){
        $this->userService->update($id,$request);
        return redirect()->route('users.index');
    }
}
