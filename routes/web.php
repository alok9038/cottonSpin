<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
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
    return view('frontend.home');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/sadmin', function () {
    return view('admin.home');
});

Route::prefix('sadmin')->as('admin.')->group(function(){
    // add slider
    Route::get('/add-slider',[SliderController::class,'view'])->name('view.add.slider');
    Route::post('/add-slider',[SliderController::class,'add'])->name('add.slider');
    // delete slider
    Route::post('/delete-slider',[SliderController::class,'delete'])->name('delete.slider');
    // change status
    Route::post('/status-slider',[SliderController::class,'status'])->name('slider.change.status');
    // manage sliders
    Route::get('/manage-slider',[SliderController::class,'manage'])->name('manage.slider');

    // add slider
    Route::get('/add-testimonial',[TestimonialController::class,'view'])->name('view.add.testimonial');
    Route::post('/add-testimonial',[TestimonialController::class,'add'])->name('add.testimonial');
    // delete slider
    Route::post('/delete-testimonial',[TestimonialController::class,'delete'])->name('delete.testimonial');
    // change status
    Route::post('/status-testimonial',[TestimonialController::class,'status'])->name('testimonial.change.status');
    // manage sliders
    Route::get('/manage-testimonial',[TestimonialController::class,'manage'])->name('manage.testimonial');
});

Route::get('/dashboard', function () {
    return view('/admin/home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
