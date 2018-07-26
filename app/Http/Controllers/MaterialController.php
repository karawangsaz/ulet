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

        $data = [
            'sector' => $sector[0],
            'materials' => $materials,
        ];

        return view('pages/materials', $data);
    }
}
