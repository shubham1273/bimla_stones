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
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\AboutUsSectionController;
use App\Http\Controllers\WebsiteController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// website routes
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/products', [WebsiteController::class, 'products'])->name('products');
Route::get('/manufacture-process', [WebsiteController::class, 'manufacture_process'])->name('manufacture_process');
Route::get('/about-us', [WebsiteController::class, 'about_us'])->name('about_us');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [WebsiteController::class, 'blog_detail'])->name('blog_detail');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [WebsiteController::class, 'contact_us'])->name('contact_us');
Route::get('/career_page', [WebsiteController::class, 'career'])->name('career_page');

// User Form Submission Route
Route::post('/submit-enquiry', [ContactController::class, 'store'])->name('contact.store');
Route::post('/get-in-touch', [GetInTouchController::class, 'store'])->name('get_in_touch.store');
Route::post('/submit-quote', [QuoteController::class, 'store'])->name('quote.store');
Route::post('/job-apply', [JobApplicationController::class, 'store'])->name('job.apply');

Route::get('/admin/get-in-touch/export', [GetInTouchController::class, 'export'])->name('admin.get_in_touch.export');




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

    Route::get('/admin/work', [HomePageController::class, 'work'])->name('work');
    Route::get('/admin/work-edit/{id}', [HomePageController::class, 'workEdit'])->name('workEdit');
    Route::put('/admin/home/section8/{id}', [HomePageController::class, 'updateSection8'])->name('home_section.updateSection8');

    Route::get('/admin/homepage9', [HomePageController::class, 'section9'])->name('homepage9');
    Route::put('/home-section-9/{id}', [HomePageController::class, 'updateSection9'])->name('home_section.update9');





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

    //contact us by homepagecontroller

    Route::resource('/admin/founders', FounderController::class);
    Route::get('/admin/contactUs', [HomePageController::class, 'contactUs'])->name('contactUs');
    Route::put('/admin/updatecontactUs/{id}', [HomePageController::class, 'updatecontactUs'])->name('updatecontactUs.update');


    Route::get('/admin/contactUs2', [HomePageController::class, 'contactUs2'])->name('contactUs2');
    Route::put('/admin/updatecontactUs2/{id}', [HomePageController::class, 'updatecontactUs2'])->name('updatecontactUs2.update');


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
    Route::get('admin/contacts/export', [ContactController::class, 'export'])->name('admin.contacts.export');


    // Get in touch
    Route::get('/admin/get-in-touch', [GetInTouchController::class, 'index'])->name('get_in_touch.index');
    Route::delete('/admin/get-in-touch/{id}', [GetInTouchController::class, 'destroy'])->name('admin.get_in_touch.destroy');

    // get Quote
    Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('quotes.index');
    Route::delete('/admin/quotes/{id}', [QuoteController::class, 'destroy'])->name('quotes.destroy');

      Route::get('/admin/quotes/export', [QuoteController::class, 'export'])->name('quotes.export');


// products page routes
Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/admin/products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');

    Route::get('/admin/product-categories', [App\Http\Controllers\ProductController::class, 'productCategoryIndex'])->name('product-categories.index');
    Route::get('/admin/product-categories/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCategoryEdit'])->name('product-categories.edit');
    Route::put('/admin/product-categories/{id}', [App\Http\Controllers\ProductController::class, 'productCategoryUpdate'])->name('product-categories.update');

    Route::get('/admin/product-categories-2', [App\Http\Controllers\ProductController::class, 'productCategoryIndex2'])->name('product-categories.index2');
    Route::get('/admin/product-categories-2/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCategoryEdit2'])->name('product-categories.edit2');
    Route::put('/admin/product-categories-2/{id}', [App\Http\Controllers\ProductController::class, 'productCategoryUpdate2'])->name('product-categories.update2');

    Route::get('/admin/product-carousel', [App\Http\Controllers\ProductController::class, 'productCarouselIndex'])->name('product-carousel.index');
    Route::get('/admin/product-carousel/create', [App\Http\Controllers\ProductController::class, 'productCarouselCreate'])->name('product-carousel.create');
    Route::post('/admin/product-carousel', [App\Http\Controllers\ProductController::class, 'productCarouselStore'])->name('product-carousel.store');
    Route::get('/admin/product-carousel/{id}/edit', [App\Http\Controllers\ProductController::class, 'productCarouselEdit'])->name('product-carousel.edit');
    Route::put('/admin/product-carousel/{id}', [App\Http\Controllers\ProductController::class, 'productCarouselUpdate'])->name('product-carousel.update');

    Route::get('/admin/product-vision', [App\Http\Controllers\ProductController::class, 'productVisionIndex'])->name('product-vision.index');
    Route::get('/admin/product-vision/{id}/edit', [App\Http\Controllers\ProductController::class, 'productVisionEdit'])->name('product-vision.edit');
    Route::put('/admin/product-vision/{id}', [App\Http\Controllers\ProductController::class, 'productVisionUpdate'])->name('product-vision.update');

    Route::get('/admin/product/section-6', [App\Http\Controllers\ProductController::class, 'section6'])->name('product-section-6');
    Route::put('/admin/product/section-6/edit/{id}', [App\Http\Controllers\ProductController::class, 'updateSection6'])->name('product-section-6.update');

    // settings route
    Route::get('/admin/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/admin/settings', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('/job-applications', [JobApplicationController::class, 'index'])->name('job.index');
    Route::delete('/job-applications/{id}', [JobApplicationController::class, 'destroy'])->name('job.delete');

    // process_routes
    Route::get('/admin/process/section-1', [ProcessController::class, 'section1'])->name('process.section_1');
    Route::put('/process/section-1/{id}', [ProcessController::class, 'updateSection1'])->name('process.section_1.update');

    Route::get('/admin/process/section-2', [ProcessController::class, 'section2'])->name('process.section_2');
    Route::get('/process/section-2/create', [ProcessController::class, 'section2Create'])->name('process.section_2.create');
    Route::post('/process/section-2', [ProcessController::class, 'section2Store'])->name('process.section_2.store');
    Route::get('/process/section-2/{id}/edit', [ProcessController::class, 'section2Edit'])->name('process.section_2.edit');
    Route::put('/process/section-2/{id}', [ProcessController::class, 'updateSection2'])->name('process.section_2.update');

    Route::get('/admin/process/section-3', [ProcessController::class, 'section3'])->name('process.section_3');
    Route::put('/process/section-3/{id}', [ProcessController::class, 'updateSection3'])->name('process.section_3.update');

    Route::get('/admin/process/section-4', [ProcessController::class, 'section4'])->name('process.section_4');
    Route::put('/process/section-4/{id}', [ProcessController::class, 'updateSection4'])->name('process.section_4.update');

    // About Us section routes
    Route::get('/admin/about-us/section-1', [AboutUsSectionController::class, 'section1'])->name('about.section_1');
    Route::put('/admin/about-us/section-1/{id}', [AboutUsSectionController::class, 'updateSection1'])->name('about.section_1.update');

    Route::get('/admin/about-us/section-2', [AboutUsSectionController::class, 'section2'])->name('about.section_2');
    Route::put('/admin/about-us/section-2/{id}', [AboutUsSectionController::class, 'updateSection2'])->name('about.section_2.update');

    Route::get('/admin/about-us/section-3', [AboutUsSectionController::class, 'section3Index'])->name('about.section_3');
    Route::get('/admin/about-us/section-3/{id}/edit', [AboutUsSectionController::class, 'section3Edit'])->name('about.section_3.edit');
    Route::put('/admin/about-us/section-3/{id}', [AboutUsSectionController::class, 'updateSection3'])->name('about.section_3.update');

    Route::get('/admin/about-us/section-4', [AboutUsSectionController::class, 'section4'])->name('about.section_4');
    Route::put('/admin/about-us/section-4/{id}', [AboutUsSectionController::class, 'updateSection4'])->name('about.section_4.update');

    Route::get('/admin/about-us/section-5', [AboutUsSectionController::class, 'section5'])->name('about.section_5');
    Route::put('/admin/about-us/section-5/{id}', [AboutUsSectionController::class, 'updateSection5'])->name('about.section_5.update');

    Route::get('/admin/about-us/section-6', [AboutUsSectionController::class, 'section6'])->name('about.section_6');
    Route::put('/admin/about-us/section-6/{id}', [AboutUsSectionController::class, 'updateSection6'])->name('about.section_6.update');

    Route::get('/admin/about-us/section-7', [AboutUsSectionController::class, 'section7'])->name('about.section_7');
    Route::put('/admin/about-us/section-7/{id}', [AboutUsSectionController::class, 'updateSection7'])->name('about.section_7.update');

    Route::get('/admin/about-us/our-leadership', [AboutUsSectionController::class, 'leadershipIndex'])->name('about.leadership');
    Route::get('/admin/about-us/our-leadership/create', [AboutUsSectionController::class, 'leadershipCreate'])->name('about.leadership.create');
    Route::post('/admin/about-us/our-leadership', [AboutUsSectionController::class, 'leadershipStore'])->name('about.leadership.store');
    Route::get('/admin/about-us/our-leadership/{id}/edit', [AboutUsSectionController::class, 'leadershipEdit'])->name('about.leadership.edit');
    Route::put('/admin/about-us/our-leadership/{id}', [AboutUsSectionController::class, 'leadershipUpdate'])->name('about.leadership.update');

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
