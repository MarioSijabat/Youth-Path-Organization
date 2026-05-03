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
