<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    //DASHBOARD PROFILE BEGIN
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('dashboard/account-setting', [ProfileController::class, 'account_setting'])->name('account.setting');
    Route::post('dashboard/account-social-setting-post', [ProfileController::class, 'account_social_setting_post'])->name('account.social.setting.post');
    //DASHBOARD PROFILE END
});
