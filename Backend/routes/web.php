<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'AegisAI BugHunters API is running',
        'status' => 'OK'
    ]);
});
