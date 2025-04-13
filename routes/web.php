<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class);
Route::get('/confidentialite', App\Livewire\Pages\Privacy::class)->name('privacy');
Route::get('/mentions-legales', App\Livewire\Pages\Legal::class)->name('legal');
