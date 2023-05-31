<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tareas\HomeController;


Route::get('tareas', [HomeController::class, 'index']);

