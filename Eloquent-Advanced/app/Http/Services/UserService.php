<?php
namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserService extends BaseService
{
    protected UserRepository $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    function getAll()
    {
        return $this->userRepo->getAll();
    }

    function getById($id) {
        return $this->userRepo->findById($id);
    }

    function store($request) {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $path = $this->updateFile($request,'image','avatar');
        $user->image = $path;
        //  $user->group_id = $request->group_id;
        $roles = $request->role_id;
        $this->userRepo->store($user, $roles);
    }

    function update($id,$request){
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $roles = $request->role_id;
        $this->userRepo->store($user,$roles);
    }
}
