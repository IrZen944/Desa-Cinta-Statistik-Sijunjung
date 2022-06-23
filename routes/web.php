<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
use App\Http\Livewire\Village;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/kategori/{id?}/{year?}/{villageId?}', Dashboard::class)->name('kategori');
Route::get('/desa', Village::class)->name('desa');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', function() {
    Session::flush();

    Auth::logout();

    return redirect('login');
})->name('logout');
