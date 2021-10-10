<?php

namespace App\Http\Controllers;

use App\Http\Middleware\HandleInertiaRequests;
use Inertia\Inertia;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;

class DashboardController
{
    #[Get('/dashboard', name: 'dashboard', middleware: ['web', 'auth', 'verified'])]
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}
