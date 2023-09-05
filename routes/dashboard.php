<?php

use App\Http\Controllers\{ProfileController, TestimonialController, ContactController, TeamController, AboutController, BlogController, FunFactController, GeneralSettingsController, PortfolioController, ServiceCategoryController, ServiceController};
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    //GENERAL START
    route::get('dashboard/general-setting', [GeneralSettingsController::class, 'general_setting'])->name('general.setting');
    route::post('dashboard/general-setting/general-setting-post', [GeneralSettingsController::class, 'general_setting_post'])->name('general.setting.post');
    route::get('dashboard/general-setting/image-general-setting', [GeneralSettingsController::class, 'image_general_setting'])->name('image.general.setting');
    route::post('dashboard/general-setting/image-general-setting-post', [GeneralSettingsController::class, 'image_general_setting_post'])->name('image.general.setting.post');
    //GENERAL END

    //PROFILE BEGIN
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('dashboard/account-setting', [ProfileController::class, 'account_setting'])->name('account.setting');
    Route::post('dashboard/account-social-setting-post', [ProfileController::class, 'account_social_setting_post'])->name('account.social.setting.post');

    Route::post('dashboard/change-email-status-post', [ProfileController::class, 'change_email_status'])->name('change.email.status');
    Route::post('dashboard/change-phone-status-post', [ProfileController::class, 'change_phone_status'])->name('change.phone.status');
    Route::post('dashboard/change-address-status-post', [ProfileController::class, 'change_address_status'])->name('change.address.status');
    Route::post('dashboard/change-social-status-post', [ProfileController::class, 'change_social_status'])->name('change.social.status');
    Route::post('dashboard/change-members-social-status-post', [ProfileController::class, 'change_members_social_status'])->name('change.members.social.status');
    //PROFILE END

    //FUNFACT BEGIN
    Route::get('dashboard/our-funfact', [FunFactController::class, 'funfact'])->name('funfact');
    Route::post('dashboard/our-funfact-post', [FunFactController::class, 'funfact_post'])->name('funfact.post');
    //FUNFACT END

    //ABOUT BEGIN
    Route::get('dashboard/about/about-agency', [AboutController::class, 'about_agency'])->name('dashboard.about.agency');
    Route::post('dashboard/about-agency-store', [AboutController::class, 'about_agency_store'])->name('dashboard.about.store');
    Route::get('dashboard/about/why-choose', [AboutController::class, 'why_choose'])->name('dashboard.why.choose');
    Route::post('dashboard/about/why-choose-store', [AboutController::class, 'why_choose_store'])->name('dashboard.why.choose.store');
    //ABOUT END

    //PORTFOLIO BEGIN
    Route::resource('dashboard/serviceCategory', ServiceCategoryController::class);
    //PORTFOLIO END

    //SERVICE BEGIN
    Route::resource('dashboard/service', ServiceController::class);
    // Route::post('dashboard/service/project-step', [ServiceController::class, 'project_step'])->name('project.step.post');
    //SERVICE END

    //PORTFOLIO BEGIN
    Route::resource('dashboard/portfolio', PortfolioController::class);
    //PORTFOLIO END

    //BLOG BEGIN
    Route::resource('dashboard/blog', BlogController::class);
    //BLOG END

    //TEAM BEGIN
    Route::resource('dashboard/team', TeamController::class);
    //TEAM END

    //TESTIMONIAL BEGIN
    Route::resource('dashboard/testimonial', TestimonialController::class);
    //TESTIMONIAL END

    //CONTACT BEGIN
    Route::get('dashboard/contact', [ContactController::class, 'index'])->name('contact.index');
    //CONTACT END

});
