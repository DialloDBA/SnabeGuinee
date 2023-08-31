<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnabeController;
use App\Http\Controllers\AuthUiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::controller(SnabeController::class)->group(function(){
    Route::post('/newsletters','newsletters')->name('newsletters');
    Route::post('/oAuth/google','newsletters')->name('login.google');
    Route::post('/oAuth/facebook','newsletters')->name('login.facebook');
    Route::get('/','index')->name('home');
    Route::get('/home','index')->name('home.index');
    Route::get('/presentation','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact','store_contact')->name('contact.store');

    Route::get('/photos','photos')->name('photos');
    Route::get('/projets','projets')->name('projets.index');
    Route::get('/projets/{projet:slug}','projets_view')->name('photos.view');

    Route::get('/videos','videos')->name('videos');
    Route::get('/stages-et-offres-emplois','offres')->name('offres');
    Route::get('/bourses-d-etudes','bourses')->name('bourses');
    Route::get('/nos-projets','projets')->name('projets.index');
    Route::get('/nos-projets/{projet:unique}','projets_view')->name('projets.view');
    Route::get('/bourses-d-etudes/{programme:programme}/category','bourses_category')->name('bourses.category');
    Route::get('/bourses-d-etudes/{bourse:unique}','bourses_view')->name('bourses.view');

    Route::get('/faqs','faqs')->name('faq');
    Route::get('/alumni','alumnis')->name('alumni');
    Route::get('/actualites','news')->name('news');
    Route::get('/actualites/{category:unique}','category')->name('news.category');
    Route::get('/actualites/{category:unique}/{post:unique}','post')->name('news.post');
    Route::get('actualites/{category:unique}/{tag}/mots-cles','tags')->name('news.category.tags');
    Route::get('/termes-et-conditions','termes')->name('termes');
    Route::get('/politique-de-confidentialités','privacy')->name('privacy');
});

Route::middleware(['auth'])->group(function(){
    Route::controller(AuthUiController::class)->prefix("auth/")->name('auth.ui.')->group(function(){
        Route::get('{user}/ui','index')->name('home');
        Route::get('{user}/ui/messagerie','messages')->name('messages.index');
        Route::get('{user}/ui/parametres','parametres')->name('parametres.index');
        Route::get('{user}/ui/profile','profile')->name('profile.index');
        Route::get('{user}/ui/notifications','notifications')->name('notifications.index');
        Route::get('{user}/ui/entretiens-rh','entretiens')->name('entretiens-rh.index');
        Route::get('{user}/ui/offres-emplois','offres')->name('offres.index');
        Route::get('{user}/ui/ma-bourse','bourses')->name('bourses.index');

        Route::get('{user}/ui/competences','competences')->name('competences.index');
        Route::post('{user}/ui/competences','store_competences')->name('competences.store');

        Route::get('{user}/ui/formations','formations')->name('formations.index');
        Route::post('{user}/ui/formations','store_formations')->name('formations.store');

        Route::get('{user}/ui/experiences','experiences')->name('experiences.index');
        Route::post('{user}/ui/experiences','store_experiences')->name('experiences.store');
    
        // Route::get("{user}/ui/bourses/{bourse:unique}/postuler","postule_bourse")->name("bourses.postuler");
        // Route::get("{user}/ui/offres/{offre:unique}/postuler","postuler_offre")->name("offres.postuler");
    });
    Route::controller(AuthUiController::class)->group(function(){
        Route::get("bourses-d-etudes/{bourse:unique}/postuler","postule_bourse")->name("bourses.postuler");
    });
});

Route::get('/home',function(){
    if (Auth::check() && Auth::user()->username=='Admin') {
        return redirect()->route("admin.home");
    } elseif(Auth::check() && Auth::user()->username=='User'){
        if(session('welcome')){
            return redirect()->route("auth.ui.home",Auth::user()->username)->with([
                'welcome'=>session('welcome'),
            ]);
        }
        return redirect()->route("auth.ui.home",Auth::user()->username);
    }else{
        return redirect()->route('home');
    }
});


