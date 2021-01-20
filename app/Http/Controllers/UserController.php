<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $obj = new User();
        $users = $obj->all();


        return view('users.list', ['userList' => $users]);
    }

    public function viewUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.view', ['userView' => $user]);
    }
    public function formUser()
    {
        return view('users.form');
    }
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =$request->password;
        $user->save();
        return back()->with('user_created', 'User has been created successfully!');
    }

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.edit', ['userEdit' => $user]);
    }
    public function updateUser(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->with('user_updated', 'User has been updated successfully!');
    }
    public function deleteUser($id): \Illuminate\Http\RedirectResponse
    {
        User::where('id', $id)->delete();
        return back()->with('user_deleted', 'User has been deleted successfully!');
    }
    public function searchByName(Request $request)
    {
        $users = User::where('name', 'like', '%' . $request->name . '%')->get();
        return view('users.list', ['userList' => $users]);
    }
}
