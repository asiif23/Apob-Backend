<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [\App\Http\Controllers\WebController::class, 'artikelPreview']);
Route::get('/admin', function(){
    return redirect('/admin/dashboard');
});
Route::get('/about', [App\Http\Controllers\WebController::class,'about'])->name('about');
Route::get('/gallery', [App\Http\Controllers\WebController::class,'gallery'])->name('gallery');
Route::get('/contacts', [App\Http\Controllers\WebController::class,'contacts'])->name('contacts');
Route::get('/produk', [App\Http\Controllers\WebController::class,'produk'])->name('produk');
Route::get('/allPosts', [App\Http\Controllers\WebController::class,'allPosts'])->name('allPosts');
Route::get('/post/{id}', [App\Http\Controllers\WebController::class,'post'])->name('post');

// Admin routes
Auth::routes();
Route::middleware('role:Admin') -> get('/admin/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Route::middleware('role:Admin') -> resource('admin/categories', App\Http\Controllers\CategoryController::class);
Route::middleware('role:Admin') -> resource('admin/konten/katalog', App\Http\Controllers\CatalogController::class);
Route::middleware('role:Admin') -> resource('admin/artikel', App\Http\Controllers\PostController::class);
Route::middleware('role:Admin') -> get('admin/artikel/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('artikel.edit');
Route::middleware('role:Admin') -> post('admin/artikel/{id}/update', [App\Http\Controllers\PostController::class, 'update']);
Route::middleware('role:Admin') -> get('admin/katalog/{id}/edit', [App\Http\Controllers\CatalogController::class, 'edit'])->name('katalog.edit');
Route::middleware('role:Admin') -> post('admin/katalog/{id}/update', [App\Http\Controllers\CatalogController::class, 'update']);
Route::middleware('role:Admin') -> get('admin/add/artikel', [\App\Http\Controllers\CategoryController::class, 'add'])->name('artikel.add');
Route::middleware('role:Admin') -> get('admin/add/katalog', [\App\Http\Controllers\CatalogController::class, 'add'])->name('katalog.add');