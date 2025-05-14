<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HasilSurveyController;
use App\Http\Controllers\AgendaController;
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
use App\Http\Controllers\Admin\AgendaController as AdminAgendaController;
use App\Http\Controllers\Admin\MediaMonitoringController as AdminMediaMonitoringController;
use App\Http\Controllers\Admin\PresentasiController as AdminPresentasiController;
use App\Http\Controllers\Admin\ZoomBackgroundController as AdminZoomBackgroundController;
use App\Http\Controllers\Admin\TwibbonController as AdminTwibbonController;
use App\Http\Controllers\Admin\PhotoController as AdminPhotoController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\Admin\FlyerController as AdminFlyerController;
use App\Http\Controllers\Admin\DataClientController as AdminDataClientController;
use App\Http\Controllers\Admin\CRMController as AdminCRMController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUserB;
use App\Http\Middleware\IsUserK;

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
    ->middleware(IsUserB::class)
    ->name('buku.list');
Route::get('/grid-buku', [BukuController::class, 'grid'])
    ->middleware(IsUserB::class)
    ->name('buku.grid');
Route::get('/search-buku', [BukuController::class, 'search'])
    ->middleware(IsUserB::class)
    ->name('buku.search');

// Tampilan Hasil Survey 
Route::get('/hasil-survey/awareness', [HasilSurveyController::class, 'awareness'])
    ->middleware(IsUserB::class)
    ->name('survey.awareness');
Route::get('/hasil-survey/position', [HasilSurveyController::class, 'position'])
    ->middleware(IsUserB::class)
    ->name('survey.position');
Route::get('/hasil-survey/cse', [HasilSurveyController::class, 'cse'])
    ->middleware(IsUserB::class)
    ->name('survey.cse');
Route::get('/hasil-survey/skl', [HasilSurveyController::class, 'skl'])
    ->middleware(IsUserB::class)
    ->name('survey.skl');
Route::get('/hasil-survey/testimoni', [HasilSurveyController::class, 'testimoni'])
    ->middleware(IsUserB::class)
    ->name('survey.testimoni');


// Tampilan Agenda
Route::get('/list-agenda', [AgendaController::class, 'list'])
    ->middleware(IsUserB::class)
    ->name('agenda.list');
Route::get('/grid-agenda', [AgendaController::class, 'grid'])
    ->middleware(IsUserB::class)
    ->name('agenda.grid');
Route::get('/show-agenda', [AgendaController::class, 'show'])
    ->middleware(IsUserB::class)
    ->name('agenda.show');
Route::get('/search-agenda', [AgendaController::class, 'search'])
    ->middleware(IsUserB::class)
    ->name('agenda.search');

// Tampilan Presentasi
Route::get('/presentasi', [PresentasiController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('presentasi.index');
Route::get('/presentasi/search', [PresentasiController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('presentasi.search'); 

// Tampilan Background Zoom
Route::get('/zoom-background', [ZoomBackgroundController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('zoom.background');
Route::get('/zoom-background/search', [ZoomBackgroundController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('zoom-background.search');

// Tampilan Twibbon
Route::get('/twibbon', [TwibbonController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('twibbon.index');

// Tampilan Logo
Route::get('/logo', [LogoController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('logo.index');

// Tampilan CRM
Route::get('/crm/data-client', [CRMController::class, 'index'])
    ->middleware(IsUserK::class)
    ->name('crm.index');
Route::get('/crm/permohonan-akses', [CRMController::class, 'permohonan'])
    ->middleware(IsUserB::class)
    ->name('crm.permohonan');

// Upload Permohonan Akses
Route::post('/crm/permohonan-akses', [CRMController::class, 'store'])
    ->middleware(IsUserB::class)
    ->name('crm.store');

// Tampilan Laporan
Route::get('/reference/annual-report/grid', [AnnualController::class, 'grid'])
    ->middleware(IsUserB::class)
    ->name('annual.grid');
Route::get('/reference/annual-report/list', [AnnualController::class, 'list'])
    ->middleware(IsUserB::class)
    ->name('annual.list');
Route::get('/reference/sustainability-report/grid', [SustainController::class, 'grid'])
    ->middleware(IsUserB::class)
    ->name('sustain.grid');
Route::get('/reference/sustainability-report/list', [SustainController::class, 'list'])
    ->middleware(IsUserB::class)
    ->name('sustain.list');

// Tampilan Company Profile
Route::get('/reference/company-profile', [CompanyProfileController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('compro.index');

// Tampilan Dokumentasi
Route::get('/picture/photo-video', [DokumentasiController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('dokumentasi.index');
Route::get('/picture/photo-video/photo', [PhotoController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('photo.index');
Route::get('/picture/photo-video/video', [VideoController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('video.index');


// Tampilan Media Monitoring
Route::get('/meida-monitoring', [TwibbonController::class, 'index'])
    ->middleware(IsUserB::class)
    ->name('twibbon.index');

// =========================================================================================================================
// |                                                           Route Admin                                                 |
// =========================================================================================================================

// Tampilan Dashboard
Route::get('/admin/dashboard/', [AdminDashboardController::class, 'index'])
    ->middleware(IsAdmin::class)
    ->name('admin.dashboard.index');

// Tampilan Laporan Annual dan Sustain
Route::get('/admin/reference/annual-report/', [AdminAnnualController::class, 'index'])
    ->middleware(IsAdmin::class)
    ->name('admin.annual.index');

Route::get('/admin/reference/annual-report/create', [AdminAnnualController::class, 'create'])
    ->name('admin.annual.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/reference/annual-report/', [AdminAnnualController::class, 'store'])
    ->name('admin.annual.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'show'])
    ->name('admin.annual.show')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/annual-report/{id}/edit', [AdminAnnualController::class, 'edit'])
    ->name('admin.annual.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'update'])
    ->name('admin.annual.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/reference/annual-report/{id}', [AdminAnnualController::class, 'delete'])
    ->name('admin.annual.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/annual/search', [AdminAnnualController::class, 'search'])
    ->name('admin.annual.search')
    ->middleware(IsAdmin::class);

//sustain
Route::get('/admin/reference/sustain-report/', [AdminSustainController::class, 'index'])
    ->name('admin.sustain.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/sustain-report/create', [AdminSustainController::class, 'create'])
    ->name('admin.sustain.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/reference/sustain-report/', [AdminSustainController::class, 'store'])
    ->name('admin.sustain.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'show'])
    ->name('admin.sustain.show')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/sustain-report/{id}/edit', [AdminSustainController::class, 'edit'])
    ->name('admin.sustain.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'update'])
    ->name('admin.sustain.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/reference/sustain-report/{id}', [AdminSustainController::class, 'delete'])
    ->name('admin.sustain.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/sustain/search', [AdminSustainController::class, 'search'])
    ->name('admin.sustain.search')
    ->middleware(IsAdmin::class);

// Tampilan Buku
Route::get('/admin/reference/buku/', [AdminBukuController::class, 'index'])
    ->name('admin.buku.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/buku/create', [AdminBukuController::class, 'create'])
    ->name('admin.buku.create')
    ->middleware(IsAdmin::class);

    Route::post('/admin/reference/buku/', [AdminBukuController::class, 'store'])
    ->name('admin.buku.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/buku/{id}', [AdminBukuController::class, 'show'])
    ->name('admin.buku.show')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/buku/{id}/edit', [AdminBukuController::class, 'edit'])
    ->name('admin.buku.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/reference/buku/{id}', [AdminBukuController::class, 'update'])
    ->name('admin.buku.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/reference/buku/{id}', [AdminBukuController::class, 'delete'])
    ->name('admin.buku.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/buku/search', [AdminBukuController::class, 'search'])
    ->name('admin.buku.search')
    ->middleware(IsAdmin::class);

// Tampilan Agenda
Route::prefix('admin/reference/agenda')->middleware(IsAdmin::class)->group(function () {
    Route::get('/', [AdminAgendaController::class, 'index'])->name('admin.agenda.index');
    Route::get('/create', [AdminAgendaController::class, 'create'])->name('admin.agenda.create');
    Route::post('/', [AdminAgendaController::class, 'store'])->name('admin.agenda.store');
    Route::get('/search', [AdminAgendaController::class, 'search'])->name('admin.agenda.search');
    Route::get('/{id}', [AdminAgendaController::class, 'show'])->name('admin.agenda.show');
    Route::get('/{id}/edit', [AdminAgendaController::class, 'edit'])->name('admin.agenda.edit');
    Route::put('/{id}', [AdminAgendaController::class, 'update'])->name('admin.agenda.update');
    Route::delete('/{id}', [AdminAgendaController::class, 'delete'])->name('admin.agenda.delete');
});

// Tampilan Media Monitoring
Route::prefix('admin/reference/media-monitoring')->middleware(IsAdmin::class)->group(function () {
    Route::get('/', [AdminMediaMonitoringController::class, 'index'])->name('admin.media-monitoring.index');
    Route::get('/create', [AdminMediaMonitoringController::class, 'create'])->name('admin.media-monitoring.create');
    Route::post('/', [AdminMediaMonitoringController::class, 'store'])->name('admin.media-monitoring.store');
    Route::get('/{id}/edit', [AdminMediaMonitoringController::class, 'edit'])->name('admin.media-monitoring.edit');
    Route::put('/{id}', [AdminMediaMonitoringController::class, 'update'])->name('admin.media-monitoring.update');
    Route::delete('/{id}', [AdminMediaMonitoringController::class, 'delete'])->name('admin.media-monitoring.delete');
    Route::get('/search', [AdminMediaMonitoringController::class, 'search'])->name('admin.media-monitoring.search');
});

// Tampilan Template Presentasi
Route::get('/admin/reference/presentasi/', [AdminPresentasiController::class, 'index'])
    ->name('admin.presentasi.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/presentasi/create', [AdminPresentasiController::class, 'create'])
    ->name('admin.presentasi.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/reference/presentasi/', [AdminPresentasiController::class, 'store'])
    ->name('admin.presentasi.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/reference/presentasi/{id}/edit', [AdminPresentasiController::class, 'edit'])
    ->name('admin.presentasi.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/reference/presentasi/{id}', [AdminPresentasiController::class, 'update'])
    ->name('admin.presentasi.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/reference/presentasi/{id}', [AdminPresentasiController::class, 'delete'])
    ->name('admin.presentasi.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/reference/search', [AdminPresentasiController::class, 'search'])
    ->name('admin.presentasi.search')
    ->middleware(IsAdmin::class);

// Tampilan Background Zoom
Route::get('/admin/picture/zoom-background/', [AdminZoomBackgroundController::class, 'index'])
    ->name('admin.zoom-background.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/zoom-background/create', [AdminZoomBackgroundController::class, 'create'])
    ->name('admin.zoom-background.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/picture/zoom-background/', [AdminZoomBackgroundController::class, 'store'])
    ->name('admin.zoom-background.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/zoom-background/{id}/edit', [AdminZoomBackgroundController::class, 'edit'])
    ->name('admin.zoom-background.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/picture/zoom-background/{id}', [AdminZoomBackgroundController::class, 'update'])
    ->name('admin.zoom-background.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/picture/zoom-background/{id}', [AdminZoomBackgroundController::class, 'delete'])
    ->name('admin.zoom-background.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/zoom-background/search', [AdminZoomBackgroundController::class, 'search'])
    ->name('admin.zoom-background.search')
    ->middleware(IsAdmin::class);

// Tampilan Twibbon
Route::get('/admin/picture/twibbon/', [AdminTwibbonController::class, 'index'])
    ->name('admin.twibbon.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/twibbon/create', [AdminTwibbonController::class, 'create'])
    ->name('admin.twibbon.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/picture/twibbon/', [AdminTwibbonController::class, 'store'])
    ->name('admin.twibbon.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'show'])
    ->name('admin.twibbon.show')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/twibbon/{id}/edit', [AdminTwibbonController::class, 'edit'])
    ->name('admin.twibbon.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'update'])
    ->name('admin.twibbon.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/picture/twibbon/{id}', [AdminTwibbonController::class, 'delete'])
    ->name('admin.twibbon.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/twibbon/search', [AdminTwibbonController::class, 'search'])
    ->name('admin.twibbon.search')
    ->middleware(IsAdmin::class);

// Tampilan Photo
Route::get('/admin/picture/photo', [AdminPhotoController::class, 'index'])
    ->name('admin.photo.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/photo/create', [AdminPhotoController::class, 'create'])
    ->name('admin.photo.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/picture/photo', [AdminPhotoController::class, 'store'])
    ->name('admin.photo.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/photo/{id}/edit', [AdminPhotoController::class, 'edit'])
    ->name('admin.photo.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/picture/photo/{id}', [AdminPhotoController::class, 'update'])
    ->name('admin.photo.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/picture/photo/{id}', [AdminPhotoController::class, 'delete'])
    ->name('admin.photo.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/photo/search', [AdminPhotoController::class, 'search'])
    ->name('admin.photo.search')
    ->middleware(IsAdmin::class);

// Tampilan Video
Route::get('/admin/picture/video', [AdminVideoController::class, 'index'])
    ->name('admin.video.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/video/create', [AdminVideoController::class, 'create'])
    ->name('admin.video.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/picture/video', [AdminVideoController::class, 'store'])
    ->name('admin.video.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/video/{id}/edit', [AdminVideoController::class, 'edit'])
    ->name('admin.video.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/picture/video/{id}', [AdminVideoController::class, 'update'])
    ->name('admin.video.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/picture/video/{id}', [AdminVideoController::class, 'delete'])
    ->name('admin.video.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/video/search', [AdminVideoController::class, 'search'])
    ->name('admin.video.search')
    ->middleware(IsAdmin::class);

// Tampilan Flyer
Route::get('/admin/picture/flyer', [AdminFlyerController::class, 'index'])
    ->name('admin.flyer.index')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/flyer/create', [AdminFlyerController::class, 'create'])
    ->name('admin.flyer.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/picture/flyer', [AdminFlyerController::class, 'store'])
    ->name('admin.flyer.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/picture/flyer/{id}/edit', [AdminFlyerController::class, 'edit'])
    ->name('admin.flyer.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/picture/flyer/{id}', [AdminFlyerController::class, 'update'])
    ->name('admin.flyer.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/picture/flyer/{id}', [AdminFlyerController::class, 'delete'])
    ->name('admin.flyer.delete')
    ->middleware(IsAdmin::class);

Route::get('admin/flyer/search', [AdminFlyerController::class, 'search'])
    ->name('admin.flyer.search')
    ->middleware(IsAdmin::class);

// Tampilan Data Client
Route::get('/admin/crm/data-client', [AdminDataClientController::class, 'index'])
    ->name('admin.crm.data-client')
    ->middleware(IsAdmin::class);

Route::get('/admin/crm/data-client/search', [AdminDataClientController::class, 'search'])
    ->name('admin.crm.data-client.search')
    ->middleware(IsAdmin::class);

Route::get('/admin/crm/data-client/create', [AdminDataClientController::class, 'create'])
    ->name('admin.crm.data-client.create')
    ->middleware(IsAdmin::class);

Route::post('/admin/crm/data-client', [AdminDataClientController::class, 'store'])
    ->name('admin.crm.data-client.store')
    ->middleware(IsAdmin::class);

Route::get('/admin/crm/data-client/{id}/edit', [AdminDataClientController::class, 'edit'])
    ->name('admin.crm.data-client.edit')
    ->middleware(IsAdmin::class);

Route::put('/admin/crm/data-client/{id}', [AdminDataClientController::class, 'update'])
    ->name('admin.crm.data-client.update')
    ->middleware(IsAdmin::class);

Route::delete('/admin/crm/data-client/{id}', [AdminDataClientController::class, 'destroy'])
    ->name('admin.crm.data-client.destroy')
    ->middleware(IsAdmin::class);


// Tampilan Permohonan/CRM
Route::get('/admin/crm/permohonan', [AdminCRMController::class, 'index'])
    ->name('admin.crm.permohonan')
    ->middleware(IsAdmin::class);

Route::get('/admin/crm/permohonan/search', [AdminCRMController::class, 'search'])
    ->name('admin.crm.permohonan.search')
    ->middleware(IsAdmin::class);

Route::get('/admin/crm/permohonan/{id}', [AdminCRMController::class, 'show'])
    ->name('admin.crm.permohonan.show')
    ->middleware(IsAdmin::class);

Route::put('/admin/crm/permohonan/{id}/approve', [AdminCRMController::class, 'approve'])
    ->name('admin.crm.permohonan.approve')
    ->middleware(IsAdmin::class);

Route::put('/admin/crm/permohonan/{id}/reject', [AdminCRMController::class, 'reject'])
    ->name('admin.crm.permohonan.reject')
    ->middleware(IsAdmin::class);