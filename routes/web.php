<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\FrontEnd\FrontEndController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;


Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/portfolio-details/{id}', 'portfolioDetails')->name('portfolio-details');
    Route::get('/contact-us', 'contact')->name('contact-us');
    Route::post('/contact-us', 'store')->name('send.email');

});

//Route::middleware(['auth', 'verified','role:user'])->group(function () {
//    Route::controller(FrontEndController::class)->group(function () {
//        Route::get('/', 'index')->name('home');
//
//    });
//});

require __DIR__.'/auth.php';
/***********************Start Dashboard All Route*******************************/
Route::group(['middleware'=>'disable_back_btn'],function () {
    Route::middleware(['auth', 'verified','role:admin'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/admin/dashboard', 'index')->name('homeDashboard');

        });
        Route::controller(HomeSliderController::class)->group(function () {
            Route::get('/admin/slider', 'index')->name('slider');
            Route::post('/admin/add-slider', 'save')->name('saveSlider');
            Route::get('/admin/manage-slider', 'manage')->name('manageSlider');
            Route::get('/admin/edit-slider/{id}', 'edit')->name('editSlider');
            Route::post('/admin/update-slider', 'update')->name('updateSlider');
            Route::get('/admin/delete-slider/{id}', 'delete')->name('deleteSlider');
            Route::get('/admin/slider-publication-status/{id}', 'status')->name('slider-publication-status');

        });
        Route::controller(AboutController::class)->group(function () {
            Route::get('/admin/about', 'index')->name('about');
            Route::post('/admin/add-main-about', 'saveMainAbout')->name('save-main-about');
            Route::get('/admin/manage-main-about', 'manageMainAbout')->name('manage-main-about');
            Route::get('/admin/edit-main-about/{id}', 'editMainAbout')->name('edit-main-about');
            Route::post('/admin/update-main-about', 'updateMainAbout')->name('update-main-about');
            Route::get('/admin/delete-main-about/{id}', 'deleteMainAbout')->name('delete-main-about');
            Route::get('/admin/main-publication-status/{id}', 'mainStatus')->name('main-publication-status');

            //******************** Card About ****************************

            Route::get('/admin/card-about', 'cardAbout')->name('card-about');
            Route::post('/admin/add-card-about', 'saveCardAbout')->name('save-card-about');
            Route::get('/admin/manage-card-about', 'manageCardAbout')->name('manage-card-about');
            Route::get('/admin/edit-card-about/{id}', 'editCardAbout')->name('edit-card-about');
            Route::post('/admin/update-card-about', 'updateCardAbout')->name('update-card-about');
            Route::get('/admin/delete-card-about/{id}', 'deleteCardAbout')->name('delete-card-about');
            Route::get('/admin/card-publication-status/{id}', 'cardStatus')->name('card-publication-status');

        });
        Route::controller(ServiceController::class)->group(function () {
            Route::get('/admin/service-title', 'index')->name('service-title');
            Route::post('/admin/add-service-title', 'saveServiceTitle')->name('save-service-title');
            Route::get('/admin/manage-service-title', 'manageServiceTitle')->name('manage-service-title');
            Route::get('/admin/edit-manage-title/{id}', 'editServiceTitle')->name('edit-manage-title');
            Route::post('/admin/update-manage-title', 'updateServiceTitle')->name('update-manage-title');
            Route::get('/admin/delete-manage-title/{id}', 'deleteServiceTitle')->name('delete-manage-title');
            Route::get('/admin/service-publication-status/{id}', 'titleStatus')->name('service-publication-status');

            //******************** Card Service ****************************

            Route::get('/admin/service-card', 'serviceCard')->name('service-card');
            Route::post('/admin/add-card-service', 'saveCardService')->name('save-card-service');
            Route::get('/admin/manage-card-service', 'manageCardService')->name('manage-service-card');
            Route::get('/admin/edit-manage-card/{id}', 'editCardService')->name('edit-manage-card');
            Route::post('/admin/update-manage-card', 'updateCardService')->name('update-manage-card');
            Route::get('/admin/delete-manage-card/{id}', 'deleteCardService')->name('delete-manage-card');
            Route::get('/admin/service-card-publication-status/{id}', 'cardStatus')->name('service-card-publication-status');

        });
        Route::controller(PortfolioController::class)->group(function () {
            Route::get('/admin/portfolio-title', 'portfolioTitle')->name('portfolio-title');
            Route::post('/admin/add-portfolio-title', 'savePortfolioTitle')->name('save-portfolio-title');
            Route::get('/admin/manage-portfolio-title', 'managePortfolioTitle')->name('manage-portfolio-title');
            Route::get('/admin/edit-portfolio-title/{id}', 'editPortfolioTitle')->name('edit-portfolio-title');
            Route::post('/admin/update-portfolio-title', 'updatePortfolioTitle')->name('update-portfolio-title');
            Route::get('/admin/delete-portfolio-title/{id}', 'deletePortfolioTitle')->name('delete-portfolio-title');
            Route::get('/admin/portfolio-title-publication-status/{id}', 'titleStatus')->name('portfolio-title-publication-status');

            //******************** Portfolio Add ****************************

            Route::get('/admin/portfolio', 'index')->name('portfolio');
            Route::post('/admin/add-portfolio', 'savePortfolio')->name('save-portfolio');
            Route::get('/admin/manage-portfolio', 'managePortfolio')->name('manage-portfolio');
            Route::get('/admin/edit-portfolio/{id}', 'editPortfolio')->name('edit-portfolio');
            Route::post('/admin/update-portfolio', 'updatePortfolio')->name('update-portfolio');
            Route::get('/admin/delete-portfolio/{id}', 'deletePortfolio')->name('delete-portfolio');
            Route::get('/admin/portfolio-publication-status/{id}', 'portfolioStatus')->name('portfolio-publication-status');

        });
        Route::controller(QuestionController::class)->group(function () {
            Route::get('/admin/question-title', 'index')->name('question-title');
            Route::post('/admin/add-question-title', 'saveQuestionTitle')->name('save-question-title');
            Route::get('/admin/manage-question-title', 'manageQuestionTitle')->name('manage-question-title');
            Route::get('/admin/edit-question-title/{id}', 'editQuestionTitle')->name('edit-question-title');
            Route::post('/admin/update-question-title', 'updateQuestionTitle')->name('update-question-title');
            Route::get('/admin/delete-question-title/{id}', 'deleteQuestionTitle')->name('delete-question-title');
            Route::get('/admin/question-title-publication-status/{id}', 'titleStatus')->name('question-title-publication-status');

            //******************** Question Add ****************************

            Route::get('/admin/question', 'question')->name('question');
            Route::post('/admin/add-question', 'saveQuestion')->name('save-question');
            Route::get('/admin/manage-question', 'manageQuestion')->name('manage-question');
            Route::get('/admin/edit-question/{id}', 'editQuestion')->name('edit-question');
            Route::post('/admin/update-question', 'updateQuestion')->name('update-question');
            Route::get('/admin/delete-question/{id}', 'deleteQuestion')->name('delete-question');
            Route::get('/admin/question-publication-status/{id}', 'questionStatus')->name('question-publication-status');

        });
        Route::controller(ContactController::class)->group(function () {
            Route::get('/admin/contact-title', 'index')->name('contact-title');
            Route::post('/admin/add-contact-title', 'saveContactTitle')->name('save-contact-title');
            Route::get('/admin/manage-contact-title', 'manageContactTitle')->name('manage-contact-title');
            Route::get('/admin/edit-contact-title/{id}', 'editContactTitle')->name('edit-contact-title');
            Route::post('/admin/update-contact-title', 'updateContactTitle')->name('update-contact-title');
            Route::get('/admin/delete-contact-title/{id}', 'deleteContactTitle')->name('delete-contact-title');
            Route::get('/admin/contact-title-publication-status/{id}', 'titleStatus')->name('contact-title-publication-status');

            //******************** Contact Info ****************************

            Route::get('/admin/contact-info', 'contact')->name('contact-info');
            Route::post('/admin/add-contact-info', 'saveContactInfo')->name('save-contact-info');
            Route::get('/admin/manage-contact-info', 'manageContactInfo')->name('manage-contact-info');
            Route::get('/admin/edit-contact-info/{id}', 'editContactInfo')->name('edit-contact-info');
            Route::post('/admin/update-contact-info', 'updateContactInfo')->name('update-contact-info');
            Route::get('/admin/delete-contact-info/{id}', 'deleteContactInfo')->name('delete-contact-info');
            Route::get('/admin/contact-info-publication-status/{id}', 'contactStatus')->name('contact-info-publication-status');

        });

        Route::controller(AdminController::class)->group(function () {
            Route::get('/admin/logout', 'destroy')->name('admin-logout');
        });

        //******************** Site Setting ****************************
        Route::controller(SettingController::class)->group(function () {
            Route::get('/admin/setting-footer', 'index')->name('create-footer');
            Route::post('/admin/setting-footer', 'store')->name('save-footer');

            Route::get('/admin/setting-favicon', 'favicon')->name('create-favicon');
            Route::post('/admin/setting-favicon', 'storeFavicon')->name('save-favicon');

            Route::get('/admin/setting-iframe', 'iframe')->name('create-iframe');
            Route::post('/admin/setting-iframe', 'storeIframe')->name('save-iframe');

            Route::get('/admin/setting-logo', 'logo')->name('create-logo');
            Route::post('/admin/setting-logo', 'logoUpload')->name('logo-upload');
        });


    });
});
/***********************End Dashboard All Route*******************************/
