<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    public function view($slug)
    {
        $sector = DB::table('sectors')
            ->where('slug', $slug)->get()->toArray();

        $materials = DB::table('materials')
            ->where('id_sector', $sector[0]->id)->get()->toArray();

        for ($i=0; $i < count($materials); $i++) {
            $some_series = DB::table('series')
                ->select(DB::raw('nama, slug'))
                ->where('id_material', $materials[$i]->id)
                ->inRandomOrder()
                ->limit(3)
                ->get()->toArray();

            $materials[$i]->series = $some_series;
        }

        $data = [
            'sector' => $sector[0],
            'materials' => $materials,
        ];

        return view('pages/materials', $data);
    }
}
