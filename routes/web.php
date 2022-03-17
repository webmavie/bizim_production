<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChangePasswordController;
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
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('/service/{slug}', 'Service')->name('service');
    Route::get('/models', 'Models')->name('models');
    Route::get('/model/{slug}', 'Model')->name('model');
});

Auth::routes(['register' => false]);

Route::prefix('admin')->name('admin.')->controller(AdminController::class)->middleware('auth')->group(function(){
    Route::get('', 'Info')->name('index');
    Route::post('informations/update', 'InfoUpdate')->name('info.update');
    
    Route::get('slides', 'Slides')->name('slides');
    Route::post('slides/store', 'SlidesStore')->name('slides.store');
    Route::get('slides/{id}/delete', 'SlidesDelete')->name('slide.delete');
    
    Route::get('partners', 'Partners')->name('partners');
    Route::post('partners/store', 'PartnersStore')->name('partners.store');
    Route::get('partners/{id}/delete', 'PartnerDelete')->name('partner.delete');

    Route::get('our-team', 'OurTeam')->name('our-team');
    Route::get('our-team/create', 'OurTeamCreate')->name('our-team.create');
    Route::post('our-team/store', 'OurTeamStore')->name('our-team.store');
    Route::get('our-team/edit/{id}', 'OurTeamEdit')->name('our-team.edit');
    Route::post('our-team/update/{id}', 'OurTeamUpdate')->name('our-team.update');
    Route::get('our-team/delete/{id}', 'OurTeamDelete')->name('our-team.delete');

    Route::get('services', 'Services')->name('services.list');
    Route::get('service/create', 'ServiceCreate')->name('service.create');
    Route::post('service/store', 'ServiceStore')->name('service.store');
    Route::get('services/edit/{id}', 'ServiceEdit')->name('service.edit');
    Route::post('services/update/{id}', 'ServiceUpdate')->name('service.update');
    Route::get('services/delete/{id}', 'ServiceDelete')->name('service.delete');
    Route::get('service/images/{id}', 'ServiceImages')->name('service.images');
    Route::post('service/image/store', 'ServiceImageStore')->name('service.image.store');
    Route::get('service/image/delete/{id}', 'ServiceImageDelete')->name('service.image.delete');
    Route::get('service/videos/{id}', 'ServiceVideos')->name('service.videos');
    Route::post('service/video/store', 'ServiceVideoStore')->name('service.video.store');
    Route::get('service/video/delete/{id}', 'ServiceVideoDelete')->name('service.video.delete');
    Route::get('service/questions', 'ServiceQuestions')->name('service.questions');
    Route::post('service/question/store', 'ServiceQuestionStore')->name('service.question.store');
    Route::get('service/question/delete/{id}', 'ServiceQuestionDelete')->name('service.question.delete');

    Route::get('models', 'Models')->name('models');
    Route::post('model-ifno/update', 'ModelInfoUpdate')->name('model_info.update');
    Route::get('models/edit/{id}', 'ModelEdit')->name('model.edit');
    Route::post('model/update', 'ModelUpdate')->name('model.update');
    Route::get('model/create', 'ModelCreate')->name('model.create');
    Route::post('model/store', 'ModelStore')->name('model.store');
    Route::get('model/{id}/images', 'ModelImages')->name('model.images');
    Route::post('model/image-store', 'ModelImageStore')->name('model.image.store');
    Route::get('model/image/{id}/delete', 'ModelImageDelete')->name('model.image.delete');
    Route::get('model/{id}/delete', 'ModelDelete')->name('model.delete');
    Route::post('our-team/our-team-title-update', 'OurTeamTitleUpdate')->name('our_team_title.update');
    Route::post('our-team/partners-title-update', 'PartnersTitleUpdate')->name('partners_title.update');
});

Route::get('change-password', [ChangePasswordController::class, 'index'])->middleware('auth')->name('edit.password');
Route::post('change-password', [ChangePasswordController::class, 'store'])->middleware('auth')->name('change.password');