<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.employees.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.employees.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'required|min:7|max:255',
        ]);

        $user->update($attributes);

        return redirect('/admin/employees')->with('success', 'Employee updated!');
    }

    public function show(User $user)
    {
        return view('admin.employees.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/employees')->with('success', 'Employee deleted!');
    }
}
