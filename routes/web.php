<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('diensten', [PageController::class, 'diensten'])->name('diensten');
Route::get('projecten', [PageController::class, 'projecten'])->name('projecten');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'contactStore'])->name('contact.store');
Route::get('hoe-ik-werk', [PageController::class, 'hoeIkWerk'])->name('hoe-ik-werk');
Route::get('admin/{secret?}', [PageController::class, 'admin'])->name('admin');
