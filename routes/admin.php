<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AppliedLoansController;
use App\Http\Controllers\HoldLoansController;
use App\Http\Controllers\ProcessingLoansController;
use App\Http\Controllers\ApprovedLoansController;
use App\Http\Controllers\RejectedLoansController;
use App\Http\Controllers\SanctionedLoansController;
use App\Http\Controllers\DisbursedLoansController;
use App\Http\Controllers\ContactEnquiryController;
use App\Http\Controllers\AllwebEnquiryController;
use App\Http\Controllers\LeadManagementController;
use App\Http\Controllers\CityController;

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');

    Route::get('/users', [App\Http\Controllers\UsersController::class, 'users'])->name('users');
    Route::get('/add-users', [App\Http\Controllers\UsersController::class, 'addUsers'])->name('add-users');
    Route::get('/edit-users/{id?}', [App\Http\Controllers\UsersController::class, 'editUsers'])->name('edit-users');
    Route::post('/users-save', [App\Http\Controllers\UsersController::class, 'usersSave'])->name('users-save');
    Route::get('/users-delete/{id?}', [App\Http\Controllers\UsersController::class, 'usersDelete'])->name('users-delete');
    Route::get('/users-banned/{id?}', [App\Http\Controllers\UsersController::class, 'usersBanned'])->name('users-banned');
    Route::get('/users-profile/{id?}', [App\Http\Controllers\UsersController::class, 'usersProfile'])->name('users-profile');

    Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
    Route::get('/roles-add', [App\Http\Controllers\RoleController::class, 'rolesAdd'])->name('roles-add');
    Route::get('/roles-edit/{id?}', [App\Http\Controllers\RoleController::class, 'rolesEdit'])->name('roles-edit');
    Route::post('/roles-save', [App\Http\Controllers\RoleController::class, 'rolesSave'])->name('roles-save');
    Route::post('/roles-update/{id?}', [App\Http\Controllers\RoleController::class, 'rolesUpdate'])->name('roles-update');
    Route::get('/roles-delete/{id?}', [App\Http\Controllers\RoleController::class, 'rolesDelete'])->name('roles-delete');

    Route::get('/slider', [App\Http\Controllers\SliderController::class, 'index'])->name('slider');
    Route::get('/slider-add', [App\Http\Controllers\SliderController::class, 'create'])->name('slider.add');
    Route::post('/slider-store', [App\Http\Controllers\SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider-edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider-update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider-delete/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('slider.delete');

    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/about-add', [App\Http\Controllers\AboutController::class, 'create'])->name('about.add');
    Route::post('/about-store', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store');
    Route::get('/about-edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about-update/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('about.update');
    Route::get('/about-delete/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('about.delete');

    Route::get('/financial-specialists', [App\Http\Controllers\FinancialSpecialistsController::class, 'index'])->name('financial-specialists');
    Route::get('/financial-specialists-add', [App\Http\Controllers\FinancialSpecialistsController::class, 'create'])->name('financial-specialists.add');
    Route::post('/financial-specialists-store', [App\Http\Controllers\FinancialSpecialistsController::class, 'store'])->name('financial-specialists.store');
    Route::get('/financial-specialists-edit/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'edit'])->name('financial-specialists.edit');
    Route::post('/financial-specialists-update/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'update'])->name('financial-specialists.update');
    Route::get('/financial-specialists-delete/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'destroy'])->name('financial-specialists.delete');


    Route::get('/your-achivements', [App\Http\Controllers\YourachievementsController::class, 'index'])->name('your-achivements');
    Route::get('/your-achivements-add', [App\Http\Controllers\YourachievementsController::class, 'create'])->name('your-achivements.add');
    Route::post('/your-achivements-store', [App\Http\Controllers\YourachievementsController::class, 'store'])->name('your-achivements.store');
    Route::get('/your-achivements-edit/{id}', [App\Http\Controllers\YourachievementsController::class, 'edit'])->name('your-achivements.edit');
    Route::post('/your-achivements-update/{id}', [App\Http\Controllers\YourachievementsController::class, 'update'])->name('your-achivements.update');
    Route::get('/your-achivements-delete/{id}', [App\Http\Controllers\YourachievementsController::class, 'destroy'])->name('your-achivements.delete');

    Route::get('/why-choose-chintamani', [App\Http\Controllers\WhychooseChintamaniController::class, 'index'])->name('why-choose-chintamani');
    Route::get('/why-choose-chintamani-add', [App\Http\Controllers\WhychooseChintamaniController::class, 'create'])->name('why-choose-chintamani.add');
    Route::post('/why-choose-chintamani-store', [App\Http\Controllers\WhychooseChintamaniController::class, 'store'])->name('why-choose-chintamani.store');
    Route::get('/why-choose-chintamani-edit/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'edit'])->name('why-choose-chintamani.edit');
    Route::post('/why-choose-chintamani-update/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'update'])->name('why-choose-chintamani.update');
    Route::get('/why-choose-chintamani-delete/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'destroy'])->name('why-choose-chintamani.delete');

    Route::get('/become-partner', [App\Http\Controllers\BecomePartnerController::class, 'index'])->name('become-partner');
    Route::get('/become-partner-add', [App\Http\Controllers\BecomePartnerController::class, 'create'])->name('become-partner.add');
    Route::post('/become-partner-store', [App\Http\Controllers\BecomePartnerController::class, 'store'])->name('become-partner.store');
    Route::get('/become-partner-edit/{id}', [App\Http\Controllers\BecomePartnerController::class, 'edit'])->name('become-partner.edit');
    Route::post('/become-partner-update/{id}', [App\Http\Controllers\BecomePartnerController::class, 'update'])->name('become-partner.update');
    Route::get('/become-partner-delete/{id}', [App\Http\Controllers\BecomePartnerController::class, 'destroy'])->name('become-partner.delete');

    Route::get('/support-customer', [App\Http\Controllers\SupportCustomerController::class, 'index'])->name('support-customer');
    Route::get('/support-customer-add', [App\Http\Controllers\SupportCustomerController::class, 'create'])->name('support-customer.add');
    Route::post('/support-customer-store', [App\Http\Controllers\SupportCustomerController::class, 'store'])->name('support-customer.store');
    Route::get('/support-customer-edit/{id}', [App\Http\Controllers\SupportCustomerController::class, 'edit'])->name('support-customer.edit');
    Route::post('/support-customer-update/{id}', [App\Http\Controllers\SupportCustomerController::class, 'update'])->name('support-customer.update');
    Route::get('/support-customer-delete/{id}', [App\Http\Controllers\SupportCustomerController::class, 'destroy'])->name('support-customer.delete');

    Route::get('/who-we-are', [App\Http\Controllers\WhoweareController::class, 'index'])->name('who-we-are');
    Route::get('/who-we-are-add', [App\Http\Controllers\WhoweareController::class, 'create'])->name('who-we-are.add');
    Route::post('/who-we-are-store', [App\Http\Controllers\WhoweareController::class, 'store'])->name('who-we-are.store');
    Route::get('/who-we-are-edit/{id}', [App\Http\Controllers\WhoweareController::class, 'edit'])->name('who-we-are.edit');
    Route::post('/who-we-are-update/{id}', [App\Http\Controllers\WhoweareController::class, 'update'])->name('who-we-are.update');
    Route::get('/who-we-are-delete/{id}', [App\Http\Controllers\WhoweareController::class, 'destroy'])->name('who-we-are.delete');

    Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');
    Route::get('/faq-add', [App\Http\Controllers\FaqController::class, 'create'])->name('faq.add');
    Route::post('/faq-store', [App\Http\Controllers\FaqController::class, 'store'])->name('faq.store');
    Route::get('/faq-edit/{id}', [App\Http\Controllers\FaqController::class, 'edit'])->name('faq.edit');
    Route::post('/faq-update/{id}', [App\Http\Controllers\FaqController::class, 'update'])->name('faq.update');
    Route::get('/faq-delete/{id}', [App\Http\Controllers\FaqController::class, 'destroy'])->name('faq.delete');

    Route::get('/city', [CityController::class, 'index'])->name('city');
    Route::get('/city-add', [CityController::class, 'create'])->name('city.add');
    Route::post('/city-store', [CityController::class, 'store'])->name('city.store');
    Route::get('/city-edit/{id}', [CityController::class, 'edit'])->name('city.edit');
    Route::post('/city-update/{id}', [CityController::class, 'update'])->name('city.update');
    Route::get('/city-delete/{id}', [CityController::class, 'destroy'])->name('city.delete');

    Route::get('/city-pages', [App\Http\Controllers\CityPagesController::class, 'index'])->name('city-pages');
    Route::get('/city-pages-add', [App\Http\Controllers\CityPagesController::class, 'create'])->name('city-pages.add');
    Route::post('/city-pages-store', [App\Http\Controllers\CityPagesController::class, 'store'])->name('city-pages.store');
    Route::get('/city-pages-edit/{id}', [App\Http\Controllers\CityPagesController::class, 'edit'])->name('city-pages.edit');
    Route::post('/city-pages-update/{id}', [App\Http\Controllers\CityPagesController::class, 'update'])->name('city-pages.update');
    Route::get('/city-pages-delete/{id}', [App\Http\Controllers\CityPagesController::class, 'destroy'])->name('city-pages.delete');

    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::get('/category-add', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.add');
    Route::post('/category-store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category-edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::get('/category-delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category');
    Route::get('/sub-category-add', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('sub-category.add');
    Route::post('/sub-category-store', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category-edit/{id}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category-update/{id}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category-delete/{id}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('sub-category.delete');

    Route::get('/get-free-score', [App\Http\Controllers\GetfreescoreController::class, 'index'])->name('get-free-score');
    Route::get('/get-free-score-add', [App\Http\Controllers\GetfreescoreController::class, 'create'])->name('get-free-score.add');
    Route::post('/get-free-score-store', [App\Http\Controllers\GetfreescoreController::class, 'store'])->name('get-free-score.store');
    Route::get('/get-free-score-edit/{id}', [App\Http\Controllers\GetfreescoreController::class, 'edit'])->name('get-free-score.edit');
    Route::post('/get-free-score-update/{id}', [App\Http\Controllers\GetfreescoreController::class, 'update'])->name('get-free-score.update');
    Route::get('/get-free-score-delete/{id}', [App\Http\Controllers\GetfreescoreController::class, 'destroy'])->name('get-free-score.delete');

    Route::get('/why-choose-us', [App\Http\Controllers\WhyChooseuscoreController::class, 'index'])->name('why-choose-us');
    Route::get('/why-choose-us-add', [App\Http\Controllers\WhyChooseuscoreController::class, 'create'])->name('why-choose-us.add');
    Route::post('/why-choose-us-store', [App\Http\Controllers\WhyChooseuscoreController::class, 'store'])->name('why-choose-us.store');
    Route::get('/why-choose-us-edit/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'edit'])->name('why-choose-us.edit');
    Route::post('/why-choose-us-update/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'update'])->name('why-choose-us.update');
    Route::get('/why-choose-us-delete/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'destroy'])->name('why-choose-us.delete');

    Route::get('/our-blogs', [App\Http\Controllers\OurBlogsController::class, 'index'])->name('our-blogs');
    Route::get('/our-blogs-add', [App\Http\Controllers\OurBlogsController::class, 'create'])->name('our-blogs.add');
    Route::post('/our-blogs-store', [App\Http\Controllers\OurBlogsController::class, 'store'])->name('our-blogs.store');
    Route::get('/our-blogs-edit/{id}', [App\Http\Controllers\OurBlogsController::class, 'edit'])->name('our-blogs.edit');
    Route::post('/our-blogs-update/{id}', [App\Http\Controllers\OurBlogsController::class, 'update'])->name('our-blogs.update');
    Route::get('/our-blogs-delete/{id}', [App\Http\Controllers\OurBlogsController::class, 'destroy'])->name('our-blogs.delete');

    Route::get('/career', [App\Http\Controllers\CareerController::class, 'index'])->name('career');
    Route::get('/career-add', [App\Http\Controllers\CareerController::class, 'create'])->name('career.add');
    Route::post('/career-store', [App\Http\Controllers\CareerController::class, 'store'])->name('career.store');
    Route::get('/career-edit/{id}', [App\Http\Controllers\CareerController::class, 'edit'])->name('career.edit');
    Route::post('/career-update/{id}', [App\Http\Controllers\CareerController::class, 'update'])->name('career.update');
    Route::get('/career-delete/{id}', [App\Http\Controllers\CareerController::class, 'destroy'])->name('career.delete');

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::get('/contact-add', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.add');
    Route::post('/contact-store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact-edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact-update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact-delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.delete');

    Route::get('/insurances', [App\Http\Controllers\InsurancesController::class, 'index'])->name('insurances');
    Route::get('/insurances-add', [App\Http\Controllers\InsurancesController::class, 'create'])->name('insurances.add');
    Route::post('/insurances-store', [App\Http\Controllers\InsurancesController::class, 'store'])->name('insurances.store');
    Route::get('/insurances-edit/{id}', [App\Http\Controllers\InsurancesController::class, 'edit'])->name('insurances.edit');
    Route::post('/insurances-update/{id}', [App\Http\Controllers\InsurancesController::class, 'update'])->name('insurances.update');
    Route::get('/insurances-delete/{id}', [App\Http\Controllers\InsurancesController::class, 'destroy'])->name('insurances.delete');

    Route::get('/loan-type-services', [App\Http\Controllers\LoantypeServicesController::class, 'index'])->name('loan-type-services');
    Route::get('/loan-type-services-add', [App\Http\Controllers\LoantypeServicesController::class, 'create'])->name('loan-type-services.add');
    Route::post('/loan-type-services-store', [App\Http\Controllers\LoantypeServicesController::class, 'store'])->name('loan-type-services.store');
    Route::get('/loan-type-services-edit/{id}', [App\Http\Controllers\LoantypeServicesController::class, 'edit'])->name('loan-type-services.edit');
    Route::post('/loan-type-services-update/{id}', [App\Http\Controllers\LoantypeServicesController::class, 'update'])->name('loan-type-services.update');
    Route::get('/loan-type-services-delete/{id}', [App\Http\Controllers\LoantypeServicesController::class, 'destroy'])->name('loan-type-services.delete');

    Route::get('/rejection', [App\Http\Controllers\InquiryController::class, 'rejection'])->name('rejection');
    Route::get('/enquiry', [App\Http\Controllers\InquiryController::class, 'enquiry'])->name('enquiry');
    // Route::get('/manual-leads', [App\Http\Controllers\InquiryController::class, 'manual'])->name('manual-leads');

    Route::get('/verification', [VerificationController::class, 'index'])->name('verification.loan');
    Route::get('/loanuser-details/{id}', [VerificationController::class, 'loanuserDetails'])->name('loanuser.details');
    Route::post('verification-delete', [VerificationController::class, 'destroy'])->name('verificationloan.delete');

    Route::get('/appliedloans', [AppliedLoansController::class, 'index'])->name('appliedloans.loan');
    Route::get('/holdloans', [HoldLoansController::class, 'index'])->name('holdloans.loan');
    Route::get('/processingloans', [ProcessingLoansController::class, 'index'])->name('processingloans.loan');
    Route::get('/approvedLoans', [ApprovedLoansController::class, 'index'])->name('approvedloans.loan');
    Route::get('/rejectedLoans', [RejectedLoansController::class, 'index'])->name('rejectedloans.loan');
    Route::get('/sanctionedLoans', [SanctionedLoansController::class, 'index'])->name('sanctionedloans.loan');
    Route::get('/disbursedLoans', [DisbursedLoansController::class, 'index'])->name('disbursedloans.loan');

    Route::get('/viewContactEnquiry', [ContactEnquiryController::class, 'index'])->name('viewcontact.enquiry');
    Route::get('/allwebEnquiry', [AllwebEnquiryController::class, 'index'])->name('allwebenquiry.enquiry');
    Route::resource('lead_management', LeadManagementController::class);
    Route::get('/leadManagement', [LeadManagementController::class, 'index'])->name('lead.management');


    /// Admin Design ////
    Route::get('/emandate-registration', function () {
        return view('admin.e-mandate.emandate-registration');
    })->name('emandate.egistration');
    Route::get('/emandate-failed', function () {
        return view('admin.e-mandate.emandate-failed');
    })->name('emandate.failed');
    Route::get('/emandate-deactivate', function () {
        return view('admin.e-mandate.emandate-deactivate');
    })->name('emandate.deactivate');

    Route::get('/ptp', function () {
        return view('admin.collection.ptp');
    })->name('ptp');
    Route::get('/ptp-reports', function () {
        return view('admin.collection.ptp-reports');
    })->name('ptp.reports');
    Route::get('/reports', function () {
        return view('admin.collection.reports');
    })->name('reports');
    Route::get('/npa', function () {
        return view('admin.collection.ptp-npa');
    })->name('ptp.npa');
    Route::get('/assignToExecutive', function () {
        return view('admin.collection.ptp-assign-to-executive');
    })->name('ptp.assignToExecutive');
    Route::get('/due-list', function () {
        return view('admin.collection.due-list');
    })->name('due.list');
    Route::get('/view-visit', function () {
        return view('admin.collection.view-visit');
    })->name('view.visit');

    Route::get('/dsa', function () {
        return view('admin.dsa');
    })->name('dsa');
    Route::get('/promotional-notification', function () {
        return view('admin.promotional-notification');
    })->name('promotional.notification');
    Route::get('/search', function () {
        return view('admin.search');
    })->name('search');
});
