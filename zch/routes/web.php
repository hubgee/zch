<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/management', [FrontendController::class, 'management'])->name('frontend.management');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('frontend.facilities');
Route::get('/appointment', [FrontendController::class, 'appointment'])->name('frontend.appointment');
Route::get('/audio', [FrontendController::class, 'audio'])->name('frontend.audio');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/structure', [FrontendController::class, 'structure'])->name('frontend.structure');
Route::get('/faq', [FrontendController::class, 'faq'])->name('frontend.faq');
Route::get('/organogram', [FrontendController::class, 'organogram'])->name('frontend.organogram');
Route::get('/departments', [FrontendController::class, 'departments'])->name('frontend.departments');
Route::get('/departments/surgical', [FrontendController::class, 'surgical'])->name('frontend.departments.surgical');
Route::get('/departments/maternal-child', [FrontendController::class, 'maternalChild'])->name('frontend.departments.maternal-child');
Route::get('/departments/diagnostic', [FrontendController::class, 'diagnostic'])->name('frontend.departments.diagnostic');
Route::get('/departments/emergency', [FrontendController::class, 'emergency'])->name('frontend.departments.emergency');
Route::get('/departments/medical', [FrontendController::class, 'medical'])->name('frontend.departments.medical');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend.services');
Route::get('/doctors', [FrontendController::class, 'doctors'])->name('frontend.doctors');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend.news');
Route::get('/news/{article}', [FrontendController::class, 'newsArticle'])->name('frontend.news.article');
Route::get('/photos', [FrontendController::class, 'photos'])->name('frontend.photos');
Route::get('/videos', [FrontendController::class, 'videos'])->name('frontend.videos');
Route::get('/downloads', [FrontendController::class, 'downloads'])->name('frontend.downloads');
Route::get('/events', [FrontendController::class, 'events'])->name('frontend.events');
Route::get('/vacancies', [FrontendController::class, 'vacancies'])->name('frontend.vacancies');
Route::get('/online-application', [FrontendController::class, 'onlineApplication'])->name('frontend.online_application');
Route::post('/online-application', [FrontendController::class, 'submitOnlineApplication'])->name('frontend.online_application.submit');
Route::get('/testimonials', [FrontendController::class, 'testimonials'])->name('frontend.testimonials');
