<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\JobApplicationController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Form Submission Route
Route::post('/submit-enquiry', [ContactController::class, 'store'])->name('contact.store');
Route::post('/get-in-touch', [GetInTouchController::class, 'store'])->name('get_in_touch.store');
Route::post('/submit-quote', [QuoteController::class, 'store'])->name('quote.store');
Route::post('/job-apply', [JobApplicationController::class, 'store'])->name('job.apply');



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
    Route::get('/admin/offer-edit/{id}', [HomePageController::class, 'offerEdit'])->name('offerEdit');
    Route::put('/admin/home/section6/{id}', [HomePageController::class, 'updateSection6'])->name('home_section.updateSection6');

    Route::get('/admin/choose', [HomePageController::class, 'choose'])->name('choose');
    Route::put('/home-section-7/{id}', [HomePageController::class, 'updateSection7'])->name('home_section.updateSection7');



    //blog

    Route::resource('/admin/blogs', BlogController::class);

    //gallery

    // Gallery Routes
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::put('/admin/gallery/{id}', [GalleryController::class, 'updateSection1'])->name('gallery.updateSection1');

    Route::get('/admin/gallery2', [GalleryController::class, 'gallery2'])->name('gallery2');
    Route::put('/admin/gallery2/{id}', [GalleryController::class, 'updateSection2'])->name('gallery2.updateSection2');

    Route::get('/admin/gallery3', [GalleryController::class, 'gallery3'])->name('gallery3');
    Route::put('/admin/gallery3/{id}', [GalleryController::class, 'updateSection3'])->name('gallery.updateSection3');

    Route::get('/admin/gallery4', [GalleryController::class, 'gallery4'])->name('gallery4');
    Route::put('/admin/gallery4/{id}', [GalleryController::class, 'updateSection4'])->name('gallery.updateSection4');

    //contact us

    Route::resource('/admin/founders', FounderController::class);
    Route::get('/admin/contactUs', [HomePageController::class, 'contactUs'])->name('contactUs');
    Route::put('/admin/updatecontactUs/{id}', [HomePageController::class, 'updatecontactUs'])->name('updatecontactUs.update');

    //career

    // Career Page Routes
    Route::get('/admin/career', [CareerController::class, 'index'])->name('career');
    Route::put('/admin/career/{id}', [CareerController::class, 'updateSection1'])->name('career.updateSection1');

    Route::get('/admin/career2', [CareerController::class, 'career'])->name('career2');
    Route::put('/admin/career2/{id}', [CareerController::class, 'updateSection2'])->name('career.updateSection2');

    Route::resource('/admin/jobs', JobController::class);



    //clients

    Route::get('/admin/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/admin/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/admin/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/admin/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/admin/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

    //faq
    Route::resource('faqs', FaqController::class);

    // Admin Contact
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

    // Get in touch
    Route::get('/admin/get-in-touch', [GetInTouchController::class, 'index'])->name('get_in_touch.index');
    Route::delete('/admin/get-in-touch/{id}', [GetInTouchController::class, 'destroy'])->name('admin.get_in_touch.destroy');

    // get Quote
    Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('quotes.index');
    Route::delete('/admin/quotes/{id}', [QuoteController::class, 'destroy'])->name('quotes.destroy');

    // products page routes
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');

    Route::get('/product-categories', [App\Http\Controllers\ProductController::class, 'productCategoryIndex'])->name('product-categories.index');
    Route::get('/product-categories/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCategoryEdit'])->name('product-categories.edit');
    Route::put('/product-categories/{id}', [App\Http\Controllers\ProductController::class, 'productCategoryUpdate'])->name('product-categories.update');

    Route::get('/product-categories-2', [App\Http\Controllers\ProductController::class, 'productCategoryIndex2'])->name('product-categories.index2');
    Route::get('/product-categories-2/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCategoryEdit2'])->name('product-categories.edit2');
    Route::put('/product-categories-2/{id}', [App\Http\Controllers\ProductController::class, 'productCategoryUpdate2'])->name('product-categories.update2');

    Route::get('/product-carousel', [App\Http\Controllers\ProductController::class, 'productCarouselIndex'])->name('product-carousel.index');
    Route::get('/product-carousel/create', [App\Http\Controllers\ProductController::class, 'productCarouselCreate'])->name('product-carousel.create');
    Route::post('/product-carousel', [App\Http\Controllers\ProductController::class, 'productCarouselStore'])->name('product-carousel.store');
    Route::get('/product-carousel/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCarouselEdit'])->name('product-carousel.edit');
    Route::put('/product-carousel/{id}', [App\Http\Controllers\ProductController::class, 'productCarouselUpdate'])->name('product-carousel.update');

    Route::get('/product-vision', [App\Http\Controllers\ProductController::class, 'productVisionIndex'])->name('product-vision.index');
    Route::get('/product-vision/{id}/edit', [App\Http\Controllers\ProductController::class, 'productVisionEdit'])->name('product-vision.edit');
    Route::put('/product-vision/{id}', [App\Http\Controllers\ProductController::class, 'productVisionUpdate'])->name('product-vision.update');

    Route::get('/admin/product/section-6', [App\Http\Controllers\ProductController::class, 'section6'])->name('product-section-6');
    Route::put('/admin/product/section-6/edit/{id}', [App\Http\Controllers\ProductController::class, 'updateSection6'])->name('product-section-6.update');

    // settings route
    Route::get('/admin/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/admin/settings', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('/job-applications', [JobApplicationController::class, 'index'])->name('job.index');
    Route::delete('/job-applications/{id}', [JobApplicationController::class, 'destroy'])->name('job.delete');
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
