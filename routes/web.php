<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LicensesController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/client', [ClientController::class, 'index']);
Route::post('/client/new', [ClientController::class, 'store']);
Route::get('/license', [LicensesController::class, 'index'])->name('license');
Route::post('/license/new', [LicensesController::class, 'store'])->name('license-new');
Route::get('/all/licenses',[LicensesController::class, 'show']);
Route::get('/check', [LicensesController::class, 'check']);
Route::get('/admin/clients', [AdminController::class, 'showClients']);
Route::get('/admin/licenses', [AdminController::class, 'showLicenses'])->name('showLicenses');
Route::get('/admin/pending', [AdminController::class, 'showPending']);
Route::get('/admin/edit/{id}', [AdminController::class, 'editLicense']);
Route::post('/admin/update/{id}', [AdminController::class, 'updateLicense']);

