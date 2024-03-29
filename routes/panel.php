<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\Home\ElevenPartnersController;
use App\Http\Controllers\Backend\Home\HomeAboutController;
use App\Http\Controllers\Backend\Home\HomeServicesController;
use App\Http\Controllers\Backend\Home\HomeSlidersController;
use App\Http\Controllers\Backend\Home\TestimonialsController;
use App\Http\Controllers\Backend\Programming\ProgrammingServicesController;
use App\Http\Controllers\Backend\Programming\ProgrammingSlidersController;
use App\Http\Controllers\Backend\RealEstate\RealEstateAboutController;
use App\Http\Controllers\Backend\RealEstate\RealEstateFieldsController;
use App\Http\Controllers\Backend\RealEstate\RealEstatePartnersController;
use App\Http\Controllers\Backend\RealEstate\RealEstateSlidersController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\Sport\AboutSportController;
use App\Http\Controllers\Backend\Sport\SportActivitiesController;
use App\Http\Controllers\Backend\Sport\SportSlidersController;
use App\Http\Controllers\Backend\Teamworks\TeamworksController;
use App\Http\Controllers\Backend\Tourism\GeneralTourismActivitiesController;
use App\Http\Controllers\Backend\Tourism\GeneralTourismPartnersController;
use App\Http\Controllers\Backend\Tourism\GeneralTourismSlidersController;
use App\Http\Controllers\Backend\Tourism\MedicalTourismFieldsController;
use App\Http\Controllers\Backend\Tourism\MedicalTourismFieldsImagesController;
use App\Http\Controllers\Backend\Tourism\MedicalTourismPartnersController;
use App\Http\Controllers\Backend\Tourism\MedicalTourismSlidersController;
use App\Http\Controllers\Backend\Trade\TradeAboutController;
use App\Http\Controllers\Backend\Trade\TradeFieldsController;
use App\Http\Controllers\Backend\Trade\TradeFieldsImagesController;
use App\Http\Controllers\Backend\Trade\TradeSlidersController;
use App\Http\Controllers\Backend\VisitorsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('panel')->name('panel.')->group(function () {

    Route::middleware('auth')->group(function () {


        Route::get('/', [VisitorsController::class, 'index'])->name('statistics');

        Route::prefix('home')->name('home.')->group(function () {

            Route::get('about', [HomeAboutController::class, 'about_eleven'])->name('about');
            Route::post('about', [HomeAboutController::class, 'update_about_eleven'])->name('about.post');
            Route::get('manager', [HomeAboutController::class, 'manager_words'])->name('manager');
            Route::post('manager', [HomeAboutController::class, 'update_manager_words'])->name('manager.post');
            Route::resource('partners', ElevenPartnersController::class, ['parameters' => [
                'partners' => 'elevenPartner'
            ]]);
            Route::resource('services', HomeServicesController::class, ['parameters' => [
                'services' => 'elevenField'
            ]]);
            Route::resource('sliders', HomeSlidersController::class);
            Route::resource('testimonials', TestimonialsController::class);
        });

        Route::prefix('sport')->name('sport.')->group(function () {
            Route::get('about', [AboutSportController::class, 'about_sport'])->name('about');
            Route::post('about', [AboutSportController::class, 'update_about_sport'])->name('about.post');
            Route::resource('activities', SportActivitiesController::class, ['parameters' => [
                'activities' => 'elevenActivity'
            ]]);
            Route::resource('sliders', SportSlidersController::class);
        });

        Route::prefix('general-tourism')->name('general.tourism.')->group(function () {
            Route::resource('activities', GeneralTourismActivitiesController::class, ['parameters' => [
                'activities' => 'elevenActivity'
            ]]);
            Route::resource('partners', GeneralTourismPartnersController::class, ['parameters' => [
                'partners' => 'elevenPartner'
            ]]);
            Route::resource('sliders', GeneralTourismSlidersController::class);
        });

        Route::prefix('medical-tourism')->name('medical.tourism.')->group(function () {
            Route::resource('fields', MedicalTourismFieldsController::class, ['parameters' => [
                'fields' => 'elevenField'
            ]]);
            Route::resource('fields-images', MedicalTourismFieldsImagesController::class, ['parameters' => [
                'fields-images' => 'elevenFieldsImage'
            ]]);
            Route::resource('partners', MedicalTourismPartnersController::class, ['parameters' => [
                'partners' => 'elevenPartner'
            ]]);
            Route::resource('sliders', MedicalTourismSlidersController::class);
        });

        Route::prefix('trade')->name('trade.')->group(function () {
            Route::get('about', [TradeAboutController::class, 'about_trade'])->name('about');
            Route::post('about', [TradeAboutController::class, 'update_about_trade'])->name('about.post');
            Route::resource('fields', TradeFieldsController::class, ['parameters' => [
                'fields' => 'elevenField'
            ]]);
            Route::resource('fields-images', TradeFieldsImagesController::class, ['parameters' => [
                'fields-images' => 'elevenFieldsImage'
            ]]);
            Route::resource('sliders', TradeSlidersController::class);
        });

        Route::prefix('real-estate')->name('real.estate.')->group(function () {
            Route::get('about', [RealEstateAboutController::class, 'about_real_estate'])->name('about');
            Route::post('about', [RealEstateAboutController::class, 'update_real_estate'])->name('about.post');
            Route::resource('fields', RealEstateFieldsController::class, ['parameters' => [
                'fields' => 'elevenField'
            ]]);
            Route::resource('partners', RealEstatePartnersController::class, ['parameters' => [
                'partners' => 'elevenPartner'
            ]]);
            Route::resource('sliders', RealEstateSlidersController::class);
        });

        Route::prefix('programming')->name('programming.')->group(function () {
            Route::resource('services', ProgrammingServicesController::class, ['parameters' => [
                'services' => 'elevenField'
            ]]);
            Route::resource('sliders', ProgrammingSlidersController::class);
        });

        Route::resource('teamworks', TeamworksController::class);

        Route::get('settings', [SettingController::class, 'index'])->name('settings');
        Route::post('settings', [SettingController::class, 'update'])->name('settings.post');
        Route::get('privacy', [SettingController::class, 'privacy_page'])->name('privacy');
        Route::post('privacy', [SettingController::class, 'add_privacy'])->name('privacy.post');
        Route::get('tearms', [SettingController::class, 'tearms_page'])->name('tearms');
        Route::post('tearms', [SettingController::class, 'add_tearms'])->name('tearms.post');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
