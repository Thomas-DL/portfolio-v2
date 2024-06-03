<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

// APP ROUTES

Route::view('/', 'welcome')->name('home');
Route::view('/mentions-legales', 'mentions')->name('mentions-legales');
Route::view('/conditions-generales-utilisation', 'cgu')->name('cgu');

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
