<?php

use App\Http\Controllers\BackendControllers\{ProfileController, TestimonialController, ContactController, TeamController, AboutController, BlogController, CompanyLogoController, FunFactController, GeneralSettingsController, GlobalSettingStatusController, PagesController, PortfolioController, ServiceCategoryController, ServiceController};
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

    // GLOBAL SETTINGS BEGIN
    Route::get('dashboard/global-setting', [GlobalSettingStatusController::class, 'global_setting'])->name('global.setting');
    Route::post('dashboard/change-subcription-status-post', [GlobalSettingStatusController::class, 'change_subcription_status'])->name('change.subcription.status');
    Route::post('dashboard/change-testimonial-status-post', [GlobalSettingStatusController::class, 'change_testimonial_status'])->name('change.testimonial.status');
    Route::post('dashboard/change-portfolio-status-post', [GlobalSettingStatusController::class, 'change_portfolio_status'])->name('change.portfolio.status');
    Route::post('dashboard/change-team-status-post', [GlobalSettingStatusController::class, 'change_team_status'])->name('change.team.status');
    Route::post('dashboard/change-blog-status-post', [GlobalSettingStatusController::class, 'change_blog_status'])->name('change.blog.status');
    Route::post('dashboard/change-newsletter-status-post', [GlobalSettingStatusController::class, 'change_newsletter_status'])->name('change.newsletter.status');
    // GLOBAL SETTINGS END

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

    //SERVICE CATEGORY BEGIN
    Route::resource('dashboard/serviceCategory', ServiceCategoryController::class);
    //SERVICE CATEGORY END

    //SERVICE BEGIN
    Route::resource('dashboard/service', ServiceController::class);
    Route::get('dashboard/service/service-step-delete/{id}', [ServiceController::class, 'service_step_delete'])->name('service.step.delete');
    Route::get('dashboard/service/include-service-delete/{id}', [ServiceController::class, 'include_service_delete'])->name('include.service.delete');
    Route::get('dashboard/service/service-faq-delete/{id}', [ServiceController::class, 'service_faq_delete'])->name('service.faq.delete');
    //SERVICE END

    //PORTFOLIO BEGIN
    Route::resource('dashboard/portfolio', PortfolioController::class);
    //PORTFOLIO END

    //BLOG BEGIN
    Route::resource('dashboard/blog', BlogController::class);
    Route::get('dashboard/blog-comments', [BlogController::class, 'blog_comments'])->name('blog.comments');
    Route::get('dashboard/blog-comments-delete/{id}', [BlogController::class, 'blog_comments_delete'])->name('blog.comments.delete');
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

    //NEWSLETTER BEGIN
    Route::get('dashboard/newsletter', [GeneralSettingsController::class, 'newsletter'])->name('newsletter');
    Route::get('dashboard/newsletter-delete-post/{id}', [GeneralSettingsController::class, 'newsletter_delete_post'])->name('newsletter.delete.post');
    //NEWSLETTER END

    //COMPANY LOGO BEGIN
    Route::resource('dashboard/companylogo', CompanyLogoController::class);
    Route::get('dashboard/companylogo-text', [CompanyLogoController::class, 'companylogo_text'])->name('companylogo.text');
    Route::post('dashboard/companylogo-text-post', [GeneralSettingsController::class, 'companylogo_text_post'])->name('companylogo.text.post');
    //COMPANY LOGO END

    // PAGES BEGIN
    Route::get('dashboard/pages/terms-of-conditions', [PagesController::class, 'tac'])->name('tac');
    Route::post('dashboard/pages/terms-of-conditions-update', [PagesController::class, 'tac_update'])->name('tac.update');

    Route::get('dashboard/pages/privacy-policy', [PagesController::class, 'pp'])->name('pp');
    Route::post('dashboard/pages/privacy-policy-update', [PagesController::class, 'pp_update'])->name('pp.update');
    // PAGES END

});
