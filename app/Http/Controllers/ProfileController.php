<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd(Auth::user()->npm);

        $data = [
            'user' => $user,
        ];

        return view('pages/my-profile', $data);
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

    public function update(Request $request)
    {
        $input = $request->all();

        // Proses data
        $data = [
            'tempat_lahir' => $input['tempat_lahir'],
            'tgl_lahir' => $input['tanggal_lahir'],
            'nama' => $input['nama'],
            'biografi' => $input['biografi'],
        ];

        // Proses gambar
        if ( isset($input['profile_picture']) ) {
            $data['foto'] = $input['profile_picture'];
            $path = $request->file('profile_picture')->store('public/photos');
            $data['foto'] = str_replace('public', 'storage', $path);
        }

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($data);

        return redirect('profile');
    }
}
