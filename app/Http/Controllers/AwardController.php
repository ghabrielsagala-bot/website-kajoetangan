<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display listing of awards
     */
    public function index()
    {
        $data = Award::all();
        return view('user.award-list', compact('data'));
    }

    /**
     * Show specific award
     */
    public function show(string $id)
    {
        $data = Award::where('award_id', $id)->firstOrFail();
        $data_all = Award::all();
        return view('user.award-detail', compact(['data', 'data_all']));
    }
}