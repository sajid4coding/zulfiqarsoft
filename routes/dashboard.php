<?php

use App\Http\Controllers\{ProfileController, TestimonialController, ContactController};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    //DASHBOARD PROFILE BEGIN
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
    //DASHBOARD PROFILE END

    Route::resource('dashboard/testimonial', TestimonialController::class);

    Route::get('dashboard/contact', [ContactController::class, 'index'])->name('contact.index');

});
