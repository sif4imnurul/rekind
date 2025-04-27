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
use App\Http\Controllers\Admin\TwibbonController as AdminTwibbonController;
use App\Http\Controllers\Admin\PhotoController as AdminPhotoController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\Admin\FlyerController as AdminFlyerController;
use App\Http\Controllers\Admin\DataClientController as AdminDataClientController;
use App\Http\Controllers\Admin\PermohonanController as AdminPermohonanController;
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

Route::get('admin/sustain/search', [AdminSustainController::class, 'search'])
    ->name('admin.sustain.search');

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

Route::get('admin/buku/search', [AdminBukuController::class, 'search'])
    ->name('admin.buku.search');

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

// Tampilan Twibbon
Route::get('/admin/picture/twibbon/', [AdminTwibbonController::class, 'index'])
    ->name('admin.twibbon.index');

Route::get('/admin/picture/twibbon/create', [AdminTwibbonController::class, 'create'])
    ->name('admin.twibbon.create');

Route::post('/admin/picture/twibbon/', [AdminTwibbonController::class, 'store'])
    ->name('admin.twibbon.store');

Route::get('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'show'])
    ->name('admin.twibbon.show');

Route::get('/admin/picture/twibbon/{id}/edit', [AdminTwibbonController::class, 'edit'])
    ->name('admin.twibbon.edit');

Route::put('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'update'])
    ->name('admin.twibbon.update');

Route::delete('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'delete'])
    ->name('admin.twibbon.delete');

Route::get('admin/twibbon/search', [AdminTwibbonController::class, 'search'])
    ->name('admin.twibbon.search');

// Tampilan Photo
Route::get('/admin/picture/photo', [AdminPhotoController::class, 'index'])
    ->name('admin.photo.index');

Route::get('/admin/picture/photo/create', [AdminPhotoController::class, 'create'])
    ->name('admin.photo.create');

Route::post('/admin/picture/photo', [AdminPhotoController::class, 'store'])
    ->name('admin.photo.store');

Route::get('/admin/picture/photo/{id}/edit', [AdminPhotoController::class, 'edit'])
    ->name('admin.photo.edit');

Route::put('/admin/picture/photo/{id}', [AdminPhotoController::class, 'update'])
    ->name('admin.photo.update');

Route::delete('/admin/picture/photo/{id}', [AdminPhotoController::class, 'delete'])
    ->name('admin.photo.delete');

Route::get('admin/photo/search', [AdminPhotoController::class, 'search'])
    ->name('admin.photo.search');

// Tampilan Video
Route::get('/admin/picture/video', [AdminVideoController::class, 'index'])
    ->name('admin.video.index');

Route::get('/admin/picture/video/create', [AdminVideoController::class, 'create'])
    ->name('admin.video.create');

Route::post('/admin/picture/video', [AdminVideoController::class, 'store'])
    ->name('admin.video.store');

Route::get('/admin/picture/video/{id}/edit', [AdminVideoController::class, 'edit'])
    ->name('admin.video.edit');

Route::put('/admin/picture/video/{id}', [AdminVideoController::class, 'update'])
    ->name('admin.video.update');

Route::delete('/admin/picture/video/{id}', [AdminVideoController::class, 'delete'])
    ->name('admin.video.delete');

Route::get('admin/video/search', [AdminVideoController::class, 'search'])
    ->name('admin.video.search');

// Tampilan Flyer
Route::get('/admin/picture/flyer', [AdminFlyerController::class, 'index'])
    ->name('admin.flyer.index');

Route::get('/admin/picture/flyer/create', [AdminFlyerController::class, 'create'])
    ->name('admin.flyer.create');

Route::post('/admin/picture/flyer', [AdminFlyerController::class, 'store'])
    ->name('admin.flyer.store');

Route::get('/admin/picture/flyer/{id}/edit', [AdminFlyerController::class, 'edit'])
    ->name('admin.flyer.edit');

Route::put('/admin/picture/flyer/{id}', [AdminFlyerController::class, 'update'])
    ->name('admin.flyer.update');

Route::delete('/admin/picture/flyer/{id}', [AdminFlyerController::class, 'delete'])
    ->name('admin.flyer.delete');

Route::get('admin/flyer/search', [AdminFlyerController::class, 'search'])
    ->name('admin.flyer.search');

// Tampilan Data Client
Route::get('/admin/crm/data-client', [AdminDataClientController::class, 'index'])
    ->name('admin.crm.data-client');
Route::get('/admin/crm/data-client/search', [AdminDataClientController::class, 'search'])
    ->name('admin.crm.data-client.search');
Route::get('/admin/crm/data-client/create', [AdminDataClientController::class, 'create'])
    ->name('admin.crm.data-client.create');
Route::post('/admin/crm/data-client', [AdminDataClientController::class, 'store'])
    ->name('admin.crm.data-client.store');
Route::get('/admin/crm/data-client/{id}/edit', [AdminDataClientController::class, 'edit'])
    ->name('admin.crm.data-client.edit');
Route::put('/admin/crm/data-client/{id}', [AdminDataClientController::class, 'update'])
    ->name('admin.crm.data-client.update');
Route::delete('/admin/crm/data-client/{id}', [AdminDataClientController::class, 'destroy'])
    ->name('admin.crm.data-client.destroy');

// Tampilan Permohonan/CRM
Route::get('/admin/crm/permohonan', [AdminPermohonanController::class, 'index'])
    ->name('admin.crm.permohonan');
Route::get('/admin/crm/permohonan/search', [AdminPermohonanController::class, 'search'])
    ->name('admin.crm.permohonan.search');
Route::get('/admin/crm/permohonan/{id}', [AdminPermohonanController::class, 'show'])
    ->name('admin.crm.permohonan.show');
Route::put('/admin/crm/permohonan/{id}/approve', [AdminPermohonanController::class, 'approve'])
    ->name('admin.crm.permohonan.approve');
Route::put('/admin/crm/permohonan/{id}/reject', [AdminPermohonanController::class, 'reject'])
    ->name('admin.crm.permohonan.reject');