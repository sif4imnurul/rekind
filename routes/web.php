<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ZoomBackgroundController;
use App\Http\Controllers\TwibbonController;
use App\Http\Controllers\PresentasiController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\CRMController;
use App\Http\Controllers\AnnualController;
use App\Http\Controllers\SustainController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;

// Route::get('/', function () {
//     return view('pages.home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomePageController::class, 'index'])->name('homepage.index');
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::get('/list-buku', [BukuController::class, 'list'])->name('buku.list');
Route::get('/grid-buku', [BukuController::class, 'grid'])->name('buku.grid');
Route::get('/zoom-background', [ZoomBackgroundController::class, 'index'])->name('zoom.background');
Route::get('/twibbon', [TwibbonController::class, 'index'])->name('twibbon.index');
Route::get('/presentasi', [PresentasiController::class, 'index'])->name('presentasi.index');
Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');
Route::get('/crm/data-client', [CRMController::class, 'index'])->name('crm.index');
Route::get('/crm/permohonan-akses', [CRMController::class, 'permohonan'])->name('crm.permohonan');
Route::get('/reference/annual-report/grid', [AnnualController::class, 'grid'])->name('annual.grid');
Route::get('/reference/annual-report/list', [AnnualController::class, 'list'])->name('annual.list');
Route::get('/reference/sustainability-report/grid', [SustainController::class, 'grid'])->name('sustain.grid');
Route::get('/reference/sustainability-report/list', [SustainController::class, 'list'])->name('sustain.list');
Route::get('/reference/company-profile', [CompanyProfileController::class, 'index'])->name('compro.index');
Route::get('/picture/photo-video', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::get('/picture/photo-video/photo', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/picture/photo-video/video', [VideoController::class, 'index'])->name('video.index');
