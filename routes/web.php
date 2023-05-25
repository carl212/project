<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\InputAgeController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OntimeController;
use App\Http\Controllers\HomeController;

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

Route::get('/defdsf', function () {
    return view('welcome');
})->name('welcome');

Route::get('/greeting', function () {
    return 'Hello! I am Christine Villaber';
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('testing', [TestController::class, 'testFunction']); 


Route::post('inputName', [InputNameController::class, 'showName']);  
Route::get('inputName', [InputNameController::class, 'showName']); 

Route::post('inputAge', [InputAgeController::class, 'showAge']);  
Route::get('inputAge', [InputAgeController::class, 'showAge']);  

Route::get('trylogin', [App\Http\Controllers\YearVerificationController::class, 'yearCheck'])->middleware('check_year');


Route::get('login2', [loginController::class,'showLoginForm'])->name('login');
Route::post('login2', [loginController::class,'Dashboard'])->middleware('check_login');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');


Route::resource('employees',EmployeeController::class);

Route::resource('Payors',OntimeController::class);




Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('employees.index');
})->name('dashboard');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
