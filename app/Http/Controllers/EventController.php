<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display listing of events
     */
    public function index()
    {
        $data = Events::all();
        return view('user.event-list', compact('data'));
    }

    /**
     * Show specific event
     */
    public function show(string $id)
    {
        $data = Events::where('event_id', $id)->firstOrFail();
        $data_all = Events::all();
        return view('user.event-detail', compact(['data', 'data_all']));
    }
}