<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function overview(): View
    {
        return view('overview');
    }

    public function tickets(): View
    {
        return view('tickets');
    }

    public function event(): View
    {
        return view('event');
    }

    public function social(): View
    {
        return view('social');
    }

    public function map(): View
    {
        return view('map');
    }

     public function exhibitors(): View
    {
        return view('exhibitors');
    }
}
