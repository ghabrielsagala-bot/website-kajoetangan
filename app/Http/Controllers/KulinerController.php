<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display listing of kuliner
     */
    public function index()
    {
        $data = Kuliner::all();
        return view('user.kuliner-list', compact('data'));
    }

    /**
     * Show specific kuliner
     */
    public function show(string $id)
    {
        $data = Kuliner::where('kuliner_id', $id)->firstOrFail();
        $date = $data->updated_at->format('d-m-Y');
        $data_all = Kuliner::all();
        return view('user.kuliner-detail', compact(['data', 'date','data_all']));
    }
}
