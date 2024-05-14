<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

// APP ROUTES

Route::view('/', 'welcome');

// AUTH ROUTES

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('web')->group(function () {

    $router = Route::getRoutes();

    foreach ($router as $route) {
        if ($route->getName() === 'filament.admin.auth.login') {
            $route->middleware(['guest']);
        } else if (Str::startsWith($route->getName(), 'filament.admin')) {
            $route->middleware(['role:Admin']);
        }
    }
});

require __DIR__ . '/auth.php';
