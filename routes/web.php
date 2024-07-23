<?php

use App\Http\Controllers\YouTubeController;
use Illuminate\Support\Facades\Route;

Route::get('youtube/show/', [YouTubeController::class, 'show']);
