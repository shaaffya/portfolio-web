<?php

use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('admin.responses.index');
    })->name('admin.index');

    Route::get('/admin/responses', [ContactMessageController::class, 'index'])
        ->name('admin.responses.index');
});

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/cek-pesan', function () {
    return \App\Models\ContactMessage::latest()->get();
});