<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Calculate;
use App\Http\Controllers\patientController;
use App\Http\Controllers\admincontroller;

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

Route::get('/',[DoctorController::class , 'welcome']);

Route::get('/aboutsUs', function () {
    return view('welcome');
});





Route::get('/showDoctor', [DoctorController::class , 'show']);
Route::get('/addDoctor', [DoctorController::class , 'add']);

Route::get('/calculate', [Calculate::class , 'show']);
Route::get('/showPatient', [patientController::class , 'showPatient']);



Route::get('/admin', [admincontroller::class , 'admin']);
