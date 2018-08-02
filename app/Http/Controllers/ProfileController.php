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
    
    public function edit()
    {
        if (!Auth::check()) {
            return redirect('login')->with('login_is_required', 'Login is required!');
        } else {
            $user = DB::table('users')
                ->find(Auth::user()->id);

            $data = [
                'user' => $user,
                'stylesheets' => [
                    url('node_modules/daterangepicker/daterangepicker.css')
                ],
                'scripts' => [
                    'header' => [],
                    'footer' => [
                        url('js/profile.js'),
                        url('node_modules/moment/min/moment.min.js'),
                        url('node_modules/moment/locale/id.js'),
                        url('node_modules/daterangepicker/daterangepicker.js'),
                    ],
                ],
            ];

            return view('pages/edit-profile', $data);
        }
    }
}
