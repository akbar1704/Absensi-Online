<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
use App\Models\Karyawan;
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
    return view('auth.login');
});

Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/proseslogout', [AuthController::class, 'proseslogout']);

Route::get('/presensi/create', [PresensiController::class, 'create']);
