<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/apotek', [HomeController::class, 'apotek']);

Route::get('/peta', [HomeController::class, 'peta']);
Route::get('/dokumentasi', [HomeController::class, 'dokumentasi']);


// Halaman apotek

Route::get('/detail/apotekaisyah2', [HomeController::class, 'detailApotekAisyah2']);
Route::get('/detail/apotekbertuahhangtuah', [HomeController::class, 'detailapotekbertuahhangtuah']);
Route::get('/detail/cendanafarma', [HomeController::class, 'detailcendanafarma']);
Route::get('/detail/septika', [HomeController::class, 'detailseptika']);
Route::get('/detail/insanfarma', [HomeController::class, 'detailinsanfarma']);
Route::get('/detail/kasuarifarma', [HomeController::class, 'detailkasuarifarma']);
Route::get('/detail/keluargacabang3', [HomeController::class, 'detailkeluargacabang3']);
Route::get('/detail/keluargacabang9', [HomeController::class, 'detailkeluargacabang9']);
Route::get('/detail/keluargahangtuah', [HomeController::class, 'detailkeluargahangtuah']);
Route::get('/detail/rahman', [HomeController::class, 'detailrahman']);
Route::get('/detail/stifarmandiri', [HomeController::class, 'detailstifarmandiri']);
Route::get('/detail/zhafira', [HomeController::class, 'detailzhafira']);
Route::get('/detail/fachri', [HomeController::class, 'detailfachri']);
Route::get('/detail/kulimfarma', [HomeController::class, 'detailkulimfarma']);
Route::get('/detail/kimiafarmahangtuah', [HomeController::class, 'detailkimiafarmahangtuah']);
Route::get('/detail/alita', [HomeController::class, 'detailalita']);
Route::get('/detail/sekuntum', [HomeController::class, 'detailsekuntum']);
Route::get('/detail/keluarga24', [HomeController::class, 'detailkeluarga24']);
Route::get('/detail/tamansari', [HomeController::class, 'detailtamansari']);
Route::get('/detail/neofarma', [HomeController::class, 'detailneofarma']);
Route::get('/detail/kimiafarma614', [HomeController::class, 'detailkimiafarma614']);