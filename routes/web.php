<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SessionsController;
use App\Models\Day;
use Carbon\Carbon;
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
    return redirect('/login');
});

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::middleware('can:owner')->group(function () {
    Route::get('owner/employee/create', [OwnerController::class, 'create']);
    Route::post('owner/employees', [OwnerController::class, 'store']);
    Route::get('owner/employees/report', [OwnerController::class, 'index']);
    Route::get('owner/employees/report/{employee}', [OwnerController::class, 'show']);
});


Route::post('employee/check-in', [EmployeeController::class, 'create'])->middleware('auth');