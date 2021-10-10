<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\RouteAttributes\Attributes\Get;

class DashboardController
{
    #[Get('/dashboard', name: 'dashboard', middleware: ['web', 'auth', 'verified'])]
    public function index(Request $request)
    {
        return Inertia::render('Dashboard', [
            'habits' => $request->user()->habits,
        ]);
    }
}
