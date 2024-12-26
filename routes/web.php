<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contacts', [App\Http\Controllers\Contacts\ContactsController::class, 'index']);
Route::get('/about', [App\Http\Controllers\About\AboutController::class, 'index']);

Route::group(['prefix' => 'articles'], function(){
    Route::get('/', \App\Http\Controllers\Article\ListController::class)->name('article.list');
    Route::get('/{slug}', \App\Http\Controllers\Article\ViewController::class)->name('article.view');
});

Route::group(['prefix' => 'services'], function(){
    Route::get('/', \App\Http\Controllers\Service\ListController::class)->name('service.list');
    Route::get('/{id}', \App\Http\Controllers\Service\ViewController::class)->name('service.view');
});

Route::group(['prefix' => 'vacancies'], function(){
    Route::get('/', \App\Http\Controllers\Vacancy\ListController::class)->name('vacancy.list');
    Route::get('/{id}', \App\Http\Controllers\Vacancy\ViewController::class)->name('vacancy.view');
});

Route::group(['prefix' => 'search'], function(){
    Route::get('/', \App\Http\Controllers\Search\IndexController::class)->name('search.index');
});

Route::group(['prefix' => 'news'], function(){
    Route::get('/', \App\Http\Controllers\News\ListController::class)->name('news.list');
    Route::get('/{slug}', \App\Http\Controllers\News\ViewController::class)->name('news.view');
});

Route::group(['prefix' => 'personal'], function(){
    Route::get('/', \App\Http\Controllers\Personal\IndexController::class)->name('personal.index');
});



Route::group(['middleware' => ['auth', 'permission:manage apanel']], function () {
    Route::get('/admin', \App\Http\Controllers\Admin\AdminController::class)->name('admin.index');
});

Route::group(['prefix' => 'admin/articles'], function() {
    Route::get('/', \App\Http\Controllers\Article\IndexController::class)->name('article.index');
    Route::get('/create', \App\Http\Controllers\Article\CreateController::class)->name('article.create');
    Route::post('/', \App\Http\Controllers\Article\StoreController::class)->name('article.store');
    Route::get('/{article}/edit', \App\Http\Controllers\Article\EditController::class)->name('article.edit');
    Route::get('/{article}', \App\Http\Controllers\Article\ShowController::class)->name('article.show');
    Route::patch('/{article}/update', \App\Http\Controllers\Article\UpdateController::class)->name('article.update');
    Route::post('/{article}/delete', \App\Http\Controllers\Article\DeleteController::class)->name('article.delete');
});

Route::group(['prefix' => 'admin/news'], function() {
    Route::get('/', \App\Http\Controllers\News\IndexController::class)->name('news.index');
    Route::get('/create', \App\Http\Controllers\News\CreateController::class)->name('news.create');
    Route::post('/', \App\Http\Controllers\News\StoreController::class)->name('news.store');
    Route::get('/{news}/edit', \App\Http\Controllers\News\EditController::class)->name('news.edit');
    Route::get('/{news}', \App\Http\Controllers\News\ShowController::class)->name('news.show');
   // Route::get('/{article}', \App\Http\Controllers\Article\ListController::class)->name('article.list');
    Route::patch('/{news}/update', \App\Http\Controllers\News\UpdateController::class)->name('news.update');
    Route::post('/{news}/delete', \App\Http\Controllers\News\DeleteController::class)->name('news.delete');
});

Route::group(['prefix' => 'admin/vacancies'], function() {
    Route::get('/', \App\Http\Controllers\Vacancy\IndexController::class)->name('vacancy.index');
    Route::get('/create', \App\Http\Controllers\Vacancy\CreateController::class)->name('vacancy.create');
    Route::post('/', \App\Http\Controllers\Vacancy\StoreController::class)->name('vacancy.store');
    Route::get('/{vacancy}/edit', \App\Http\Controllers\Vacancy\EditController::class)->name('vacancy.edit');
    Route::get('/{vacancy}', \App\Http\Controllers\Vacancy\ShowController::class)->name('vacancy.show');
   // Route::get('/{article}', \App\Http\Controllers\Article\ListController::class)->name('article.list');
    Route::patch('/{vacancy}/update', \App\Http\Controllers\Vacancy\UpdateController::class)->name('vacancy.update');
    Route::post('/{vacancy}/delete', \App\Http\Controllers\Vacancy\DeleteController::class)->name('vacancy.delete');
});


Route::group(['prefix' => 'admin/services'], function() {
    Route::get('/', \App\Http\Controllers\Service\IndexController::class)->name('service.index');
    Route::get('/create', \App\Http\Controllers\Service\CreateController::class)->name('service.create');
    Route::post('/', \App\Http\Controllers\Service\StoreController::class)->name('service.store');
    Route::get('/{service}/edit', \App\Http\Controllers\Service\EditController::class)->name('service.edit');
    Route::get('/{service}', \App\Http\Controllers\Service\ShowController::class)->name('service.show');
   // Route::get('/{article}', \App\Http\Controllers\Article\ListController::class)->name('article.list');
    Route::patch('/{service}/update', \App\Http\Controllers\Service\UpdateController::class)->name('service.update');
    Route::post('/{service}/delete', \App\Http\Controllers\Service\DeleteController::class)->name('service.delete');
});

Route::group(['prefix' => 'admin/users'], function() {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
});

Route::group(['prefix' => 'admin/menu'], function(){
    Route::get('/edit', \App\Http\Controllers\Menu\EditController::class)->name('menu.edit');
    Route::post('/update', \App\Http\Controllers\Menu\UpdateController::class)->name('menu.update');
});




