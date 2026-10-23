<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\Admin\ElectronicAdminController;

Route::get('/', [ElectronicController::class, 'index'])
    ->name('electronics.index');

Route::get('/electronics/{electronic}', [ElectronicController::class, 'show'])
    ->name('electronics.show');

Route::view('/tentang-kami', 'tentang-kami')->name('tentang-kami');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('electronics', ElectronicAdminController::class)
        ->except(['show']);
});
