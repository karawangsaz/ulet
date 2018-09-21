<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function series_list($slug)
    {
        $material = DB::table('materials')
            ->where('slug', $slug)
            ->get()->toArray()[0];

        $series = DB::table('series')
            ->where('id_material', $material->id)
            ->get()->toArray();

        $data = [
            'material' => $material,
            'series' => $series,
        ];

        return view('pages/topics', $data);
    }

    public function view($slug, $id = 0)
    {
        $seri = DB::table('series')
            ->where('slug', $slug)
            ->get()->toArray()[0];
            
        $material = DB::table('materials')
            ->where('id', $seri->id_material)
            ->get()->toArray()[0];

        $topics = DB::table('topics')
            ->where('id_seri', $seri->id)
            ->get()->toArray();

        $topic = DB::table('topics')
            ->where([
                'id_seri' => $seri->id,
                'urutan' => $id,
            ])
            ->get()->toArray()[0];

        $data = [
            'material' => $material,
            'seri' => $seri,
            'topics' => $topics,
            'current_topic' => $topic,
        ];

        return view('pages/series', $data);
    }

    public function edit()
    {
        $user = Auth::user();

        $courses = DB::table('series')
            ->select()
            ->where('id_admin', $user->id)
            ->orderBy('updated_at', 'desc')
            ->get()->toArray();

        $cauthor = DB::table('series_authors')
            ->select()
            ->where('id_author', $user->id)
            ->get()->toArray();

        foreach ($cauthor as $ca) {
            $cauthors = DB::table('series')
                ->select()
                ->where('id', $ca->id_seri)
                ->orderBy('updated_at', 'desc')
                ->get()->toArray();

            array_push($courses, $cauthors[0]);
        }

        $data = [
            'user' => $user,
            'title' => 'Kursusku',
            'courses' => $courses,
            'stylesheets' => [
                url('css/courses.css'),
            ],
            'header_scripts' => [],
            'footer_scripts' => [],
        ];

        return view('pages/courses', $data);
    }
}
