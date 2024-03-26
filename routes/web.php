<?php

use App\Http\Controllers\ContactController;
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
    return redirect()->route('contacts.index');
})->name('home');

Route::get('/contacts', ContactController::class . '@index')->name('contacts.index');
Route::get('/contacts/edit/{contact}', ContactController::class . '@edit')->name('contacts.edit');
Route::get('/contacts/show/{contact}', ContactController::class . '@show')->name('contacts.view');
Route::get('/contacts/new', ContactController::class . '@create')->name('contacts.create');
Route::post('/contacts/store', ContactController::class . '@store')->name('contacts.store');
Route::put('/contacts/update/{contact}', ContactController::class . '@update')->name('contacts.update');
Route::delete('/contacts/delete/{contact}', ContactController::class . '@destroy')->name('contacts.destroy');
