<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);

        auth()->user()->posts()->create($attributes);

        return redirect('/dashboard')->with('success', 'Post created successfully');
    }


}
