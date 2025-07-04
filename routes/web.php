<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Form Submission Route
Route::post('/submit-enquiry', [ContactController::class, 'store'])->name('contact.store');
Route::post('/get-in-touch', [GetInTouchController::class, 'store'])->name('get_in_touch.store');
Route::post('/submit-quote', [QuoteController::class, 'store'])->name('quote.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // homepage routes
    Route::get('/admin/homepage', [HomePageController::class, 'index'])->name('homepage');
    Route::put('/home-section-1/{id}', [HomePageController::class, 'updateSection1'])->name('home_section.update');
    Route::get('/admin/vidoes', [HomePageController::class, 'vidoes'])->name('vidoes');
    Route::put('/home-section-2/{id}', [HomePageController::class, 'updateSection2'])->name('home_section.updateVideo');
    Route::get('/admin/process', [HomePageController::class, 'process'])->name('process');
    Route::put('/home-section-3/{id}', [HomePageController::class, 'updateSection3'])->name('home_section.updateSection3');
    Route::get('/admin/whoWeare', [HomePageController::class, 'whoWeare'])->name('whoWeare');
    Route::put('/home-section-4/{id}', [HomePageController::class, 'updateSection4'])->name('home_section.updateSection4');
    Route::get('/admin/specialization', [HomePageController::class, 'specialization'])->name('specialization');
    Route::put('/home-section-5/{id}', [HomePageController::class, 'updateSection5'])->name('home_section.updateSection5');

    Route::get('/admin/offer', [HomePageController::class, 'offer'])->name('offer');
    Route::put('/admin/home/section6/{id}', [HomePageController::class, 'updateSection6'])->name('home_section.updateSection6');

    Route::get('/admin/choose', [HomePageController::class, 'choose'])->name('choose');
    Route::put('/home-section-7/{id}', [HomePageController::class, 'updateSection7'])->name('home_section.updateSection7');












    Route::get('/admin/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/admin/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/admin/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/admin/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/admin/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');



    // Admin Contact
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

    // Get in touch
    Route::get('/admin/get-in-touch', [GetInTouchController::class, 'index'])->name('admin.get_in_touch.index');
    Route::delete('/admin/get-in-touch/{id}', [GetInTouchController::class, 'destroy'])->name('admin.get_in_touch.destroy');

    // get Quote
    Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('quotes.index');
    Route::delete('/admin/quotes/{id}', [QuoteController::class, 'destroy'])->name('quotes.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
require __DIR__.'/auth.php';
