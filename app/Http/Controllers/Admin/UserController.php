<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereIn('id',  Auth::user('id'))->get();

        return view('admin.users.index', compact('users'));
    }

    public function new()
    {
        return view('admin.users.store');
    }

    public function store(UserRequest $request)
    {
        $usertData = $request->all();

        $request->validated();

        $usertData['password'] = bcrypt($usertData['password']);

        $user = new User();
        $user->create($usertData);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $user, $id)
    {
        
        $userData = $request->all();
        dd($userData);

        $request->validated();

        if ($userData['password']){
            $userData['password'] = bcrypt($userData['password']);
        }

        $user = User::findOrFail($id);
        $user->update($userData);
    }

    public function delete($id)
    {

        $user = User::findOrFail($id);
        $user->delete();
    }
}
