<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PackageController;
use App\Http\Controllers\Paclage2Controller;
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
    return view('welcome');
})->name('welcome');


Route::get('/about', function () {
    return view('about');
});
Route::get('/conference_system', function () {
    return view('conference_system');
});
Route::get('/conference_system2', function () {
    return view('conference_system2');
});
Route::get('/conference_system3', function () {
    return view('conference_system3');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/customer', function () {
    return view('customer');
});

Route::get('invoice', function () {
    return view('invoice.index');
})->name('invoice');

Route::get('/package_1', function () {
    return view('package_1');
});


Route::get('/package_2', function () {
    return view('package_2');
});


Route::get('/package_3', function () {
    return view('package_3');
});


Route::post('/calculate-package', [PackageController::class, 'calculatePackage']);

// Route::post('/calculate-package2', [Paclage2Controller::class, 'calculatePackage']);