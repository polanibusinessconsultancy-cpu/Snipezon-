<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/digital-solutions', function () {
    return view('frontend.digital-solutions');
})->name('digital-solutions');

Route::get('/general-supply', function () {
    return view('frontend.general-supply');
})->name('general-supply');

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('frontend.terms-conditions');
})->name('terms-conditions');

Route::get('/digital-solutions/custom-software-development', function () {
    return view('frontend.services.custom-software-development');
})->name('services.custom-software-development');

Route::get('/digital-solutions/ai-software-solutions', function () {
    return view('frontend.services.ai-software-solutions');
})->name('services.ai-software-solutions');

Route::get('/digital-solutions/whatsapp-business-api', function () {
    return view('frontend.services.whatsapp-business-api');
})->name('services.whatsapp-business-api');

Route::get('/digital-solutions/customer-care-automation', function () {
    return view('frontend.services.customer-care-automation');
})->name('services.customer-care-automation');

Route::get('/digital-solutions/sales-bots', function () {
    return view('frontend.services.sales-bots');
})->name('services.sales-bots');

Route::get('/digital-solutions/ai-chatbot-solutions', function () {
    return view('frontend.services.ai-chatbot-solutions');
})->name('services.ai-chatbot-solutions');

Route::get('/digital-solutions/accounting-software', function () {
    return view('frontend.services.accounting-software');
})->name('services.accounting-software');

Route::get('/digital-solutions/ecommerce-websites', function () {
    return view('frontend.services.ecommerce-websites');
})->name('services.ecommerce-websites');

Route::get('/digital-solutions/static-dynamic-websites', function () {
    return view('frontend.services.static-dynamic-websites');
})->name('services.static-dynamic-websites');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'active', 'role:super-admin,admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
