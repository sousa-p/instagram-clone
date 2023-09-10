<?php

use App\Http\Middleware\GetAuthenticatedUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $user = Auth::user();

    if ($user)
        return redirect()->route('profile.show');
    else
        return redirect('/login');
});

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth','GetAuthenticatedUser'])->name('profile.show');
