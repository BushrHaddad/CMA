<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// localization group

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        // Index
        Route::get('/', [IndexController::class, 'main'])->name('main');
        
        // Search Route
        Route::post('/', [IndexController::class, 'search'])->name('search');

        //edit resource
        Route::get ('/edit/{id}', [IndexController::class, 'edit'])->name('edit');
        
        // Know Jesus
        Route::get('/jesus', [IndexController::class, 'jesus'])->name('jesus');
        
        // All Sermons
        Route::get('/sermons', [IndexController::class, 'all_sermons'])->name('sermons');
        
        // All Articles
        Route::get('/articles', [IndexController::class, 'all_articles'])->name('articles');

        // All Hymns
        Route::get('/hymns', [IndexController::class, 'all_hymns'])->name('hymns');

        // Topics
        Route::get('/topics', [IndexController::class, 'all_topics'])->name('topics');
       
        // Go for specific resource {Sermon, Hymn, Article, and others}
        Route::get('/resource/{id}', [IndexController::class, 'show_resource'])->name('resource');
        
        // contact
        Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
        
        // About
        Route::get('/about', [IndexController::class, 'about'])->name('about');
      

        // donate
        Route::get('/donate', [IndexController::class, 'about'])->name('donate');
});

