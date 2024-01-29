<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ErrorController;
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
    return view('home');
})->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/feature', [FeaturesController::class, 'feature'])->name('feature');
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/appointment', [AppointmentController::class, 'appointment'])->name('appointment');
Route::get('/404', [ErrorController::class, 'errors'])->name('404');

Route::post('/posts', [AppointmentController::class, 'store'])->name('store')
;