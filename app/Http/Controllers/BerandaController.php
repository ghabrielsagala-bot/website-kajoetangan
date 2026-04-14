<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Events;
use App\Models\Kuliner;
use App\Models\SpotFoto;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data_kuliner = Kuliner::all();
        $data_spot_foto = SpotFoto::all();
        $data_event = Events::all();
        $data_award = Award::all();
        return view('user.beranda', compact(['data_kuliner', 'data_spot_foto', 'data_event', 'data_award']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}