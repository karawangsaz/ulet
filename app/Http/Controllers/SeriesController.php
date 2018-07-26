<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
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

// dd($topic);

        $data = [
            'material' => $material,
            'seri' => $seri,
            'topics' => $topics,
            'current_topic' => $topic,
        ];

        return view('pages/series', $data);
    }
}
