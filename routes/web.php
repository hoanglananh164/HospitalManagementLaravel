<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\Admin\AppController;


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


Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::prefix('admin')->group(function() {
    Route::get('/doctor_create', [DoctorController::class,'create'])->name('admin.create_doctor');
    Route::post('/doctor_store', [DoctorController::class,'store'])->name('admin.store_doctor');

    Route::get('/app_display', [AppController::class,'display'])->name('admin.display_app');
    Route::post('/app/del/{id}', [AppController::class,'del'])->name('admin.del_app');

    Route::get('/doctors_display', [DoctorController::class,'display'])->name('admin.display_doctors');
    Route::post('/doctors/del/{id}', [DoctorController::class,'del'])->name('admin.del_doctors');

    Route::get('/doctors/edit/{id}', [DoctorController::class,'edit'])->name('admin.edit_doctors');
    Route::post('/doctors/update/{id}', [DoctorController::class,'update'])->name('admin.update_doctors');

});

Route::prefix('user')->group(function() {
    Route::post('/appointment_store', [AppointmentController::class,'store'])->name('user.store_appointment');
    Route::get('/my_appointment', [AppointmentController::class,'appointment'])->name('user.my_appointment');
    Route::post('/my_appointment/del/{id}', [AppointmentController::class,'delappointment'])->name('user.delmy_appointment');


});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
