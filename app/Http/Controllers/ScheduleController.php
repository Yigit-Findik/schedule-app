<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        $shifts = Shift::where('user_id', $user->id)->get();

        return view('schedule.index', compact('shifts'));
    }

}
