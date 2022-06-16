<?php

use App\Http\Controllers\Admin\BlogController;
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
})->name('homepage');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
})->name('privacy_policy');

Route::get('/terms-of-use', function () {
    return view('frontend.term_of_use');
})->name('terms_of_use');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/o-gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/product-range', function () { return view('frontend.product.product_range');})->name('product.range');
Route::get('/certifications', function () { return view('frontend.product.certifications');})->name('certifications');
Route::get('/sustainability', function () { return view('frontend.product.sustainability');})->name('sustainability');
Route::get('/social-responsibility', function () { return view('frontend.people.social_responsibility');})->name('social.responsibility');
Route::get('/human-resource', function () { return view('frontend.people.human_resource');})->name('human.resource');
Route::get('/vertical-unit-set-up', function () { return view('frontend.technology.vertical');})->name('vertical');



Route::prefix('sadmin')->as('admin.')->group(function(){
    
    Route::get('/', function () {
        return view('admin.home');
    });

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

    Route::prefix('blog')->group(function(){
        Route::get('/add',[BlogController::class,'add'])->name('blog.add');
        Route::post('/store',[BlogController::class,'store'])->name('store.post');
    });
});

Route::get('/dashboard', function () {
    return view('/admin/home');
})->name('dashboard');

require __DIR__.'/auth.php';
