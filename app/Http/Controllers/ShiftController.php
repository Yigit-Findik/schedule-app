<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        //access to the user relationship


        return view('admin.shifts.index', compact('shifts'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin.shifts.create', compact('users'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'max:255',
            'start_time' => 'date_format:H:i:s',
            'end_time' => 'date_format:H:i:s',
            'date' => 'date_format:Y-m-d',
        ]);
        
        Shift::create($attributes);

        return redirect('/admin/shifts')->with('success', 'Shift created!');
    }

    public function edit(Shift $shift)
    {
        $users = User::all();

        return view('admin.shifts.edit', compact('shift', 'users'));
    }

    public function update(Shift $shift)
    {
        $attributes = request()->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'max:255',
            'start_time' => 'date_format:H:i:s',
            'end_time' => 'date_format:H:i:s',
            'date' => 'date_format:Y-m-d',
//            'user_id' => 'required|exists:users,id'
        ]);
//
//        dd($attributes);

        $shift->update($attributes);

        return redirect('/admin/shifts')->with('success', 'Shift updated!');
    }

    public function destroy(Shift $shift)
    {
        $shift->delete();

        return redirect('/admin/shifts')->with('success', 'Shift deleted!');
    }
}
