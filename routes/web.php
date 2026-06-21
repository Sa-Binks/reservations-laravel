<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reserve/{show}', function ($showId) {

    Reservation::create([
        'user_id' => Auth::id(),
        'show_id' => $showId,
        'quantity' => 1,
    ]);

    return 'Réservation effectuée';
});

Route::get('/my-reservations', function () {

    $reservations = \App\Models\Reservation::with('show')
        ->where('user_id', Auth::id())
        ->get();

    return view('reservations.index', compact('reservations'));

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');
});

require __DIR__.'/auth.php';
