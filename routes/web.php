<?php

use App\Models\User;
use App\Models\Galeri;
use App\Models\BlogEdukasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserViewsController;

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

Route::get('/', [UserViewsController::class, 'index'])->name('user.home');
Route::get('/galeri', [UserViewsController::class, 'galeri'])->name('user.galeri');
Route::get('/blog-edukasi', [UserViewsController::class, 'blog'])->name('user.blog');
Route::get('/about', [UserViewsController::class, 'about'])->name('user.about');
Route::get('/blog-edukasi/{judul_blog}', [UserViewsController::class, 'blogbaca'])->name('user.bacablog');

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'proses'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/dashboard', function () {
        $admin = User::all();
        $galeri = Galeri::all();
        $blog = BlogEdukasi::all();
        return view('admin.dashboard', compact('admin', 'galeri', 'blog'));
    })->name('dashboard');
    // Administrator
    Route::get('/admin/administrator', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/administrator/tambah', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/administrator/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/administrator/ubah/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/administrator/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/administrator/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    // Galeri
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::get('/admin/galeri/tambah', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/admin/galeri/ubah/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/admin/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/admin/galeri/delete/{id}', [GaleriController::class, 'destroy'])->name('galeri.delete');
    // Blog Edukasi
    Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/admin/blog/tambah', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/blog/ubah/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    // Profil & Kontak
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/admin/profile/update-profile/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/admin/profile/update-kontak/{id}', [ProfileController::class, 'updateKontak'])->name('kontak.update');
});
