<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'profile_thumbnail' => 'required|image|max:1024',
            'password' => 'required|min:7|max:255',
            'role_id' => ['required', Rule::in(Role::all()->pluck('id')->toArray())]
        ]);

        $attributes['profile_thumbnail'] = request()->file('profile_thumbnail')->store('profile_thumbnails');
        $user = User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created!');


    }
}
