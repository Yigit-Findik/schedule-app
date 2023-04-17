<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.employees.index', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.employees.edit', compact('user', 'roles'));
    }

    public function update(User $user)
    {
//        dd(request()->all());
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
//            'profile_thumbnail' => 'image|max:1024',
            'password' => 'max:255',
            'role_id' => ['required', Rule::in(Role::all()->pluck('id')->toArray())]
        ]);

//        $attributes['profile_thumbnail'] = request()->file('profile_thumbnail')->store('profile_thumbnails');

        $user->update($attributes);

        return redirect('/admin/employees')->with('success', 'Employee updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/employees')->with('success', 'Employee deleted!');
    }
}
