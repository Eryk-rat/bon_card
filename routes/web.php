<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('cards')->group(function () {
    // Trasa do wyświetlenia listy kart (index)
    Route::get('/', [CardController::class, 'index'])->name('cards.index');

    // Trasa do wyświetlenia formularza tworzenia nowej karty (create)
    Route::get('/create', [CardController::class, 'create'])->name('cards.create');

    // Trasa do zapisu nowej karty do bazy danych (store)
    Route::post('/', [CardController::class, 'store'])->name('cards.store');

    // Trasa do wyświetlenia szczegółów karty (show)
    Route::get('/{card}', [CardController::class, 'show'])->name('cards.show');

    // Trasa do wyświetlenia formularza edycji karty (edit)
    Route::get('/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');

    // Trasa do aktualizacji danych karty w bazie danych (update)
    Route::put('/{card}', [CardController::class, 'update'])->name('cards.update');

    // Trasa do usunięcia karty z bazy danych (destroy)
    Route::delete('/{card}', [CardController::class, 'destroy'])->name('cards.destroy');
})->middleware('auth');