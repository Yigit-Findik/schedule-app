<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
public function create()
    {
        $roles = Role::all();

        return view('register.create', compact('roles'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'password' => 'required'
        ]);

        $attributes['profile_thumbnail'] = request()->file('profile_thumbnail')->store('profile_thumbnail');

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
