<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display About Us page
     */
    public function index()
    {
        return view('user.about-us');
    }
}
