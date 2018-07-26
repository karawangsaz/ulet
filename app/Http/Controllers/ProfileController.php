<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login')->with('login_is_required', 'Login is required!');
        } else {
            $user = Auth::user();
            // dd(Auth::user()->npm);

            $data = [
                'user' => $user,
            ];

            return view('pages/my-profile', $data);
        }
    }

    public function view($id)
    {
        $user = DB::table('users')
            ->find($id);

        $data = [
            'user' => $user,
        ];

        return view('pages/others-profile', $data);
    }
}
