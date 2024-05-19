<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllerJPS;
use App\Http\Controllers\PagesControllerJPS;
use App\Http\Controllers\ClientControllerJPS;
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
Route::get('/main', [PagesControllerJps::class, 'main'])->name('main')->middleware('authenticated');
Route::get('/dashboard', [PagesControllerJps::class, 'dashboard']);
Route::get('/contactus', [PagesControllerJps::class,'contactus']);
Route::get('/aboutus', [PagesControllerJps::class, 'aboutus']);
Route::get('controlstructure', [PagesControllerJps::class, 'control']);
Route::get('/client/{ClientID?}', [PagesControllerJps::class, 'client'])->name('client.find');
Route::get('/clients', [PagesControllerJps::class, 'clientData'])->name('clients.data');

Route::get('/signup', [AuthControllerJPS::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthControllerJPS::class, 'signUp']);
Route::get('/login', [AuthControllerJPS::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthControllerJPS::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthControllerJPS::class, 'logout'])->name('logout');

Route::resource('/ClientManagement', ClientControllerJPS::class);

Route::get('/dashboard', [AuthControllerJPS::class, 'dashboard'])->name('dashboard')->middleware('authenticated');
Route::get('/', [PagesControllerJPS::class, 'landing']);