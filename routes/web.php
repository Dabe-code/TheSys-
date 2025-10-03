<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, 'index']);

// Example route - visit http://localhost:8000/example
Route::get('/example', [ExampleController::class, 'index']);
