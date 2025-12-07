<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminConfigurasiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManajemenHomeController;
use App\Http\Controllers\Admin\ManajemenAboutController;
use App\Http\Controllers\Admin\ManajemenPortofolioController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\services\ServicesKeteranganController;
use App\Http\Controllers\Admin\services\ServicesPelayananController;
use App\Http\Controllers\AuthCustom\LoginController;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\WebDesainControlller;
use App\Http\Controllers\WebDevelopmentController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\ProjectController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\LayoutController;
use Illuminate\Support\Facades\Route;

// Halaman Admin (harus login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/contact', [PesanController::class, 'store'])->name('contact.store');

Route::get('percobaan', function () {
    return view('admins.layout');
})->name('hay');

Route::get('/layout', [LayoutController::class, 'index'])->name('layout.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/About', [AboutController::class, 'index'])->name('about.index');
Route::get('/Services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/Project', [ProjectController::class, 'index'])->name('project .index');
Route::get('/Contact', [ContactController::class, 'index'])->name('contact.index');



// Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');
Route::get('/webdesain',[WebDesainControlller::class, 'index'])->name('webdesain');
Route::get('digitalmarketing',[DigitalMarketingController::class, 'index'])->name('digitalmarketing');
Route::get('/webdevelopment',[WebDevelopmentController::class, 'index'])->name('webdevelopment');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/homes', [AdminHomeController::class, 'index'])->name('homesa');
Route::post('/admin/homes', [AdminHomeController::class, 'storeOrUpdate'])->name('homes.storeOrUpdate');
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/abouts', [AdminAboutController::class, 'index'])->name('aboutsa');
Route::post('/admin/abouts', [AdminAboutController::class, 'StoreAbout'])->name('Abouts.StoreAbout');
Route::get('/admin/services/keterangan', [ServicesKeteranganController::class, 'index'])->name('services.keterangan');    
Route::post('/admin/services/keterangan', [ServicesKeteranganController::class, 'StoreKeterangan'])->name('Store.Keterangan');
Route::get('/admin/configurasi', [AdminConfigurasiController::class, 'index'])->name('configurasi.index');
Route::post('/admin/configurasi', [AdminConfigurasiController::class, 'StoreConfigurasi'])->name('configurasi.storeconfigurasi');
Route::resource('admin/services/pelayanan', ServicesPelayananController::class);
//  Route::resource('homes', ManajemenHomeController::class);
Route::resource('abouts', ManajemenAboutController::class);
Route::resource('portofolios', ManajemenPortofolioController::class);
Route::resource('mitras',MitraController::class);
Route::get('/pesans', [PesanController::class, 'index'])->name('contat.index');
Route::delete('/pesans/{pesan}', [PesanController::class, 'destroy'])->name('pesan.destroy');
});
