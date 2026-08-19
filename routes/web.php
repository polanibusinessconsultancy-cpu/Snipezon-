<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Frontend Routes (Converted Static Website)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/digital-solutions', function () {
    return view('pages.digital-solutions');
})->name('digital-solutions');

Route::prefix('digital-solutions')->name('services.')->group(function () {
    Route::get('/custom-software-development', function () {
        return view('pages.services.custom-software-development');
    })->name('custom-software');

    Route::get('/ai-software-solutions', function () {
        return view('pages.services.ai-software-solutions');
    })->name('ai-software');

    Route::get('/whatsapp-business-api', function () {
        return view('pages.services.whatsapp-business-api');
    })->name('whatsapp-api');

    Route::get('/customer-care-automation', function () {
        return view('pages.services.customer-care-automation');
    })->name('customer-care');

    Route::get('/sales-bots', function () {
        return view('pages.services.sales-bots');
    })->name('sales-bots');

    Route::get('/ai-chatbot-solutions', function () {
        return view('pages.services.ai-chatbot-solutions');
    })->name('ai-chatbots');

    Route::get('/accounting-software', function () {
        return view('pages.services.accounting-software');
    })->name('accounting');

    Route::get('/ecommerce-websites', function () {
        return view('pages.services.ecommerce-websites');
    })->name('ecommerce');

    Route::get('/static-dynamic-websites', function () {
        return view('pages.services.static-dynamic-websites');
    })->name('websites');
});

// Alias for /services/{slug} to /digital-solutions/{slug}
Route::get('/services/{slug}', function (string $slug) {
    return redirect('/digital-solutions/' . $slug, 301);
});

Route::get('/general-supply', function () {
    return view('pages.general-supply');
})->name('general-supply');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms-conditions');

/*
|--------------------------------------------------------------------------
| Admin & Authenticated User Routes
|--------------------------------------------------------------------------
*/

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
