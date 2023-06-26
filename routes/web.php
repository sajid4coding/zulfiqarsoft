<?php

use App\Http\Controllers\FrontendController;
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
Route::get('team', [FrontendController::class, 'team'])->name('team');
Route::get('member_details/{id}', [FrontendController::class, 'team_detail'])->name('team.detail');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-post', [FrontendController::class, 'contact_post'])->name('contact.post');

require __DIR__.'/auth.php';


Route::get('dashboard/analytics', function () {
    return view('backend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.analytics');

Route::get('dashboard/sales', function () {
    return view('backend.dashboard.index2');
})->middleware(['auth', 'verified'])->name('dashboard.sales');
