<?php

use App\Models\Bourse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BourseController;
use App\Http\Controllers\BoursierController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\UsersController;

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

Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'index')->name('home')->middleware(['auth']);
    // Route::get('login',"login")->name("login");
    Route::get("login","login")->name("login");
    Route::get("register","login")->name("register");
    Route::get("mot-de-passe-oublie","forgotPassword")->name("forgot-password");
});

Route::prefix('admin')->name('admin.')->middleware("auth")->group(function(){
    
    Route::controller(AdminController::class)->group(function () {
        // Route::get('/', 'index')->name('home');
        // Route::middleware(['auth'])->group(function () {

        // });
    });
    Route::controller(App\Http\Controllers\PostController::class)->group(function () {
        Route::get('liste-des-articles', 'index')->name('posts.index');
        Route::get('creer-un-article', 'create')->name('posts.create');
        Route::post('creer-un-article', 'store')->name('posts.store');
        Route::get('liste-des-articles/{post:unique}', 'show')->name('posts.show');
        Route::get('liste-des-articles/{post:unique}/edit', 'edit')->name('posts.edit');
    });
    Route::resource('temoignages', TemoignageController::class);
    // Route::resource('services', ServiceController::class);
    // Route::resource('groupe-services', GroupeServiceController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('bourses', BourseController::class);
    Route::resource('offres', OffreController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('utilisateurs', UsersController::class);
    Route::resource('boursiers', BoursierController::class);
    Route::resource('projets', ProjetController::class);
    Route::resource('contact-messages', ContactMessageController::class);
    //->only(['index','show'])
});


