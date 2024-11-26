<?php
use App\Http\Controllers\ChatController;

Route::post('chat', [ChatController::class, 'handleRequest']);

