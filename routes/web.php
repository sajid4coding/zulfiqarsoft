<?php

use App\Http\Controllers\FrontendControllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('service', [FrontendController::class, 'service'])->name('service');
Route::get('service-details/{id}', [FrontendController::class, 'service_details'])->name('service.details');
Route::get('portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('portfolio-details/{id}/{slug}', [FrontendController::class, 'portfolio_details'])->name('portfolio.details');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('blog-details/{id}', [FrontendController::class, 'blog_details'])->name('blog.details');
Route::get('blog-category/{id}', [FrontendController::class, 'blog_category'])->name('blog.category');
Route::post('blog-comment-post/{id}', [FrontendController::class, 'blog_comment'])->name('blog.comment');
Route::get('team', [FrontendController::class, 'team'])->name('team');
Route::get('member-details/{id}', [FrontendController::class, 'team_detail'])->name('team.detail');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-post', [FrontendController::class, 'contact_post'])->name('contact.post');
Route::get('newsletter-post', [FrontendController::class, 'newsletter_post'])->name('newsletter.post');
Route::get('page/{slug}', [FrontendController::class, 'page'])->name('page');

require __DIR__.'/auth.php';


Route::get('dashboard/analytics', function () {
    return view('backend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.analytics');

Route::get('dashboard/sales', function () {
    return view('backend.dashboard.index2');
})->middleware(['auth', 'verified'])->name('dashboard.sales');
