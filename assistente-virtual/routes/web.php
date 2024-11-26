<?php

use App\Livewire\AstronomyAssistant;
use Illuminate\Support\Facades\Route;

Route::get('/', AstronomyAssistant::class)->name('home');

