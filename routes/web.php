<?php

use App\Http\Controllers\DestinoController;
use App\Http\Controllers\PaqueteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/destinos');

Route::resource('destinos', DestinoController::class)->except('show');
Route::resource('paquetes', PaqueteController::class)->except('show');
