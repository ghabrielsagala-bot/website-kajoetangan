<?php

namespace App\Http\Controllers;

use App\Models\SpotFoto;
use Illuminate\Http\Request;

class SpotFotoController extends Controller
{
    /**
     * Display listing of spot foto
     */
    public function index()
    {
        $data = SpotFoto::all();
        return view('user.spotfoto-list', compact('data'));
    }

    /**
     * Show specific spot foto
     */
    public function show(string $id)
    {
        $data = SpotFoto::where('spot_foto_id', $id)->firstOrFail();
        $date = $data->updated_at->format('d-m-Y');
        $data_all = SpotFoto::all();
        return view('user.spotfoto-detail', compact(['data', 'date', 'data_all']));
    }
}