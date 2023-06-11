<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistController;


use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistSongController;

use App\Http\Controllers\GenreController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Playlists
Route::get('/playlists', [PlaylistController::class, 'index'])->middleware(['auth', 'verified'])->name("playlists");
Route::get('/playlists/{playlistId}', [PlaylistController::class, 'showDedicatedPlaylist'])->middleware(['auth', 'verified']);
Route::post('/playlists/create', [PlaylistController::class, 'createPlaylist'])->middleware(['auth', 'verified'])->name("playlistCreate");

//Songs
Route::get('/songs', [SongController::class, 'index'])->middleware(['auth', 'verified'])->name("songs");
Route::post('/songs/{songId}/add', [PlaylistSongController::class, 'addSongToPlaylist'])->middleware(['auth', 'verified']);

//Genres
Route::get('/genres', [GenreController::class, 'index'])->middleware(['auth', 'verified'])->name("genres");



require __DIR__.'/auth.php';
