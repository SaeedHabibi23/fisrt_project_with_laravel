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





Route::get('/showDoctors', [DoctorController::class , 'show']);
Route::get('/addDoctor', [DoctorController::class , 'addDoctor']);
Route::post('/storeDoctor', [DoctorController::class , 'storeDoctor']);
Route::get('/doctorDelete/{id}', [DoctorController::class , 'doctorDelete']);
Route::get('/doctorEdit/{id}', [DoctorController::class , 'doctorEdit']);
Route::post('/updateDoctor', [DoctorController::class , 'updateDoctor']);



// These Codes related to the patients
Route::get('/showPatients', [patientController::class , 'showPatients']);
Route::get('/addPatient', [patientController::class , 'addPatient']);
Route::post('/storePatient', [patientController::class , 'storePatient']);


Route::get('/calculate', [Calculate::class , 'show']);



Route::get('/admin', [admincontroller::class , 'admin']);
