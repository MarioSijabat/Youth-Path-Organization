<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\LandingPageController;
use App\Http\Controllers\History\HistoryController;
use App\Http\Controllers\VisionMission\VisionMissionController;
use App\Http\Controllers\Facility\FacilityController;
use App\Http\Controllers\Greeting\GreetingController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Announcement\AnnouncementController;
use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Artisan;
 
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/vision-mission', [VisionMissionController::class, 'index'])->name('vision-mission');
Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities');
Route::get('/greeting', [GreetingController::class, 'index'])->name('greeting');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/staff', [StaffController::class, 'index'])->name('staff');

Route::group(['prefix' => 'announcements', 'as' => 'announcements.'], function () {
    Route::get('/', [AnnouncementController::class, 'index'])->name('index');
    Route::get('/{slug}', [AnnouncementController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'application', 'as' => 'application.'], function () {
    Route::get('/', [ApplicationController::class, 'index'])->name('index');
    Route::post('/store', [ApplicationController::class, 'store'])->name('store');
});

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');


Route::get('/deploy/webhook/{token}', function ($token) {
    $expectedToken = env('DEPLOY_TOKEN');
    
    if (!$expectedToken || $token !== $expectedToken) {
        abort(403, 'Unauthorized');
    }

    try {
        $zipPath = base_path('build.zip');
        if (file_exists($zipPath)) {
            $zip = new ZipArchive;
            if ($zip->open($zipPath) === TRUE) {
                $zip->extractTo(base_path());
                $zip->close();
                unlink($zipPath);
            } else {
                throw new \Exception("Gagal mengekstrak build.zip di server");
            }
        }

        Artisan::call('migrate', ['--force' => true]);
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        
        return response()->json(['message' => 'Deployment kilat via ZIP sukses!']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});