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
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AnnualController as AdminAnnualController;
use App\Http\Controllers\Admin\SustainController as AdminSustainController;
use App\Http\Controllers\Admin\BukuController as AdminBukuController;
use App\Http\Controllers\Admin\PresentasiController as AdminPresentasiController;
use App\Http\Controllers\Admin\ZoomBackgroundController as AdminZoomBackgroundController;
use App\Http\Middleware\CekLogin;

// Route::get('/', function () {
//     return view('pages.home.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomePageController::class, 'index'])->name('homepage.index');

Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Tampilan Buku
Route::get('/list-buku', [BukuController::class, 'list'])
    ->middleware(CekLogin::class)
    ->name('buku.list');
Route::get('/grid-buku', [BukuController::class, 'grid'])
    ->middleware(CekLogin::class)
    ->name('buku.grid');
Route::get('/search-buku', [BukuController::class, 'search'])
    ->middleware(CekLogin::class)
    ->name('buku.search');

// Tampilan Presentasi
Route::get('/presentasi', [PresentasiController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('presentasi.index');
Route::get('/presentasi/search', [PresentasiController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('presentasi.search'); 

// Tampilan Background Zoom
Route::get('/zoom-background', [ZoomBackgroundController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('zoom.background');
Route::get('/zoom-background/search', [ZoomBackgroundController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('zoom-background.search');

// Tampilan Twibbon
Route::get('/twibbon', [TwibbonController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('twibbon.index');

// Tampilan Logo
Route::get('/logo', [LogoController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('logo.index');

// Tampilan CRM
Route::get('/crm/data-client', [CRMController::class, 'index'])
    ->middleware(CekLogin::class)
    ->name('crm.index');
Route::get('/crm/permohonan-akses', [CRMController::class, 'permohonan'])
    ->middleware(CekLogin::class)
    ->name('crm.permohonan');

// Upload Permohonan Akses
Route::post('/crm/permohonan-akses', [CRMController::class, 'store'])
    ->name('crm.store');

// Tampilan Laporan
Route::get('/reference/annual-report/grid', [AnnualController::class, 'grid'])
    ->name('annual.grid');
Route::get('/reference/annual-report/list', [AnnualController::class, 'list'])
    ->name('annual.list');
Route::get('/reference/sustainability-report/grid', [SustainController::class, 'grid'])
    ->name('sustain.grid');
Route::get('/reference/sustainability-report/list', [SustainController::class, 'list'])
    ->name('sustain.list');

// Tampilan Company Profile
Route::get('/reference/company-profile', [CompanyProfileController::class, 'index'])
->name('compro.index');

// Tampilan Dokumentasi
Route::get('/picture/photo-video', [DokumentasiController::class, 'index'])
    ->name('dokumentasi.index');
Route::get('/picture/photo-video/photo', [PhotoController::class, 'index'])
    ->name('photo.index');
Route::get('/picture/photo-video/video', [VideoController::class, 'index'])
    ->name('video.index');



// =========================================================================================================================
// |                                                           Route Admin                                                 |
// =========================================================================================================================
// Tampilan Laporan Annual dan Sustain
Route::get('/admin/dashboard/', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard.index');

// Tampilan Laporan Annual dan Sustain
Route::get('/admin/reference/annual-report/', [AdminAnnualController::class, 'index'])
    ->name('admin.annual.index');

Route::get('/admin/reference/annual-report/create', [AdminAnnualController::class, 'create'])
    ->name('admin.annual.create');

Route::post('/admin/reference/annual-report/', [AdminAnnualController::class, 'store'])
    ->name('admin.annual.store');

Route::get('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'show'])
    ->name('admin.annual.show');

Route::get('/admin/reference/annual-report/{id}/edit', [AdminAnnualController::class, 'edit'])
    ->name('admin.annual.edit');

Route::put('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'update'])
    ->name('admin.annual.update');

Route::delete('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'delete'])
    ->name('admin.annual.delete');

Route::get('admin/annual/search', [AdminAnnualController::class, 'search'])
    ->name('admin.annual.search');

    //sustain

Route::get('/admin/reference/sustain-report/', [AdminSustainController::class, 'index'])
    ->name('admin.sustain.index');

Route::get('/admin/reference/sustain-report/create', [AdminSustainController::class, 'create'])
    ->name('admin.sustain.create');

Route::post('/admin/reference/sustain-report/', [AdminSustainController::class, 'store'])
    ->name('admin.sustain.store');

Route::get('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'show'])
    ->name('admin.sustain.show');

Route::get('/admin/reference/sustain-report/{id}/edit', [AdminSustainController::class, 'edit'])
    ->name('admin.sustain.edit');

Route::put('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'update'])
    ->name('admin.sustain.update');

Route::delete('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'delete'])
    ->name('admin.sustain.delete');

// Tampilan Buku
Route::get('/admin/reference/buku/', [AdminBukuController::class, 'index'])
    ->name('admin.buku.index');

Route::get('/admin/reference/buku/create', [AdminBukuController::class, 'create'])
    ->name('admin.buku.create');

Route::post('/admin/reference/buku/', [AdminBukuController::class, 'store'])
    ->name('admin.buku.store');

Route::get('/admin/reference/buku/{id}', [AdminBukuController::class, 'show'])
    ->name('admin.buku.show');

Route::get('/admin/reference/buku/{id}/edit', [AdminBukuController::class, 'edit'])
    ->name('admin.buku.edit');

Route::put('/admin/reference/buku/{id}', [AdminBukuController::class, 'update'])
    ->name('admin.buku.update');

Route::delete('/admin/reference/buku/{id}', [AdminBukuController::class, 'delete'])
    ->name('admin.buku.delete');

// Tampilan Template Presentasi
Route::get('/admin/reference/presentasi/', [AdminPresentasiController::class, 'index'])
    ->name('admin.presentasi.index');

Route::get('/admin/reference/presentasi/create', [AdminPresentasiController::class, 'create'])
    ->name('admin.presentasi.create');

Route::post('/admin/reference/presentasi/', [AdminPresentasiController::class, 'store'])
    ->name('admin.presentasi.store');

Route::get('/admin/reference/presentasi/{id}/edit', [AdminPresentasiController::class, 'edit'])
    ->name('admin.presentasi.edit');

Route::put('/admin/reference/presentasi/{id}', [AdminPresentasiController::class, 'update'])
    ->name('admin.presentasi.update');

Route::delete('/admin/reference/presentasi/{id}', [AdminPresentasiController::class, 'delete'])
    ->name('admin.presentasi.delete');

// Tampilan Background Zoom
Route::get('/admin/picture/zoom-background/', [AdminZoomBackgroundController::class, 'index'])
    ->name('admin.zoom-background.index');

Route::get('/admin/picture/zoom-background/create', [AdminZoomBackgroundController::class, 'create'])
    ->name('admin.zoom-background.create');

Route::post('/admin/picture/zoom-background/', [AdminZoomBackgroundController::class, 'store'])
    ->name('admin.zoom-background.store');

Route::get('/admin/picture/zoom-background/{id}/edit', [AdminZoomBackgroundController::class, 'edit'])
    ->name('admin.zoom-background.edit');

Route::put('/admin/picture/zoom-background/{id}', [AdminZoomBackgroundController::class, 'update'])
    ->name('admin.zoom-background.update');

Route::delete('/admin/picture/zoom-background/{id}', [AdminZoomBackgroundController::class, 'delete'])
    ->name('admin.zoom-background.delete');