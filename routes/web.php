<?php

use App\Http\Controllers\Admin\ClientsProjectController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\EmployeeProjectController;
use App\Http\Controllers\Admin\EndDateController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\CallbackController;
use Faker\Guesser\Name;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('index');
})->name('index');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/case', function () {
    return view('case');
})->name('case');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes(['verify' => true]);

Route::resource('Callback', CallbackController::class)->names([
    'create' => 'callback.create',
    'store' => 'callback.store',
]);

Route::middleware(['verified', 'role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('departments', DepartmentsController::class);

    Route::resource('employee_project', EmployeeProjectController::class)->name('employee_project.index', 'employee_project');

    Route::resource('Clients', ClientsProjectController::class);

    Route::resource('salary', SalaryController::class);

    Route::resource('EndDate', EndDateController::class);

    Route::resource('Employees', EmployeeController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
