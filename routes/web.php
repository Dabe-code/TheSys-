<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', function () {
    return view('welcome');
});

// Example route - visit http://localhost:8000/example
Route::get('/example', [ExampleController::class, 'index']);
