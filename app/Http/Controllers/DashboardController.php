<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Index');
    }

    public function tourGuide(): \Inertia\Response
    {
        return Inertia::render('TourGuide');
    }
}
