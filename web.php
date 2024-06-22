<?php

use App\Http\Controllers\ProfileController;

Route::get('/profile/{id}', [ProfileController::class, 'index']);

