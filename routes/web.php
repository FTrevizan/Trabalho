<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarteiraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstabelecimentoController;



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::view('categorias.index', 'categorias')
    ->middleware(['auth', 'verified'])
    ->name('categorias');
Route::resource('categorias',CategoriaController::class);
Route::resource('estabelecimentos',EstabelecimentoController::class);
Route::resource('carteiras',CarteiraController::class);



require __DIR__.'/auth.php';
