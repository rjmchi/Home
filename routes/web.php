<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::livewire('/links', 'pages::edit-links')->name('edit.links');
Route::livewire('/videos', 'pages::showvideos')->name('videos');
Route::livewire('/notes', 'pages::shownotes')->name('notes');
Route::livewire('/schedule', 'pages::schedule')->name('schedule');
Route::livewire('/hydration', 'pages::hydration')->name('hydration');

Route::get('/{sort?}', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
