<?php

use App\Http\Controllers\ExampleResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    ExampleResourceController::class,
    'index'
])->name('example.resource.index');
