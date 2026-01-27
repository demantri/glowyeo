<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConsultationController;

Route::get('/', [EventController::class, 'index']);

// routes/web.php
Route::post('send-consultation', [ConsultationController::class, 'send'])
    ->name('consultation.send');
