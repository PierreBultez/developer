<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class);
Route::get('/confidentialite', App\Livewire\Pages\Privacy::class)->name('privacy');
Route::get('/mentions-legales', App\Livewire\Pages\Legal::class)->name('legal');
