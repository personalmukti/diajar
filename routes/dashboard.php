<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
