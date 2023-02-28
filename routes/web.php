<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
//use App\Http\Controllers\AttorneysController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::post('/appointment', [
//     'uses' => 'AppointmentController@AppointmentForm',
//     'as' => 'appointment.store'
// ]);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resources([
        'ourdashboard' => DashboardController::class,
        'appointment' => AppointmentController::class,
        ]);
});

Route::group(['middleware' => ['auth']], function () {
    Route::resources([
        'liquidbox' => AdminController::class,
        'attorneys' => AttorneysController::class,
        'practiceareas' => PracticeController::class,
        'newspage' => NewsController::class,
        'bookingspage' => BookingsController::class,
        ]);
});

Route::get('editT/{id}', [App\Http\Controllers\AttorneysController::class, 'showData']);
Route::post('editAT', [App\Http\Controllers\AttorneysController::class, 'update']);
Route::get('deleteteam/{id}',[App\Http\Controllers\AttorneysController::class, 'destroy']);

Route::get('editp/{id}', [App\Http\Controllers\PracticeController::class, 'showData']);
Route::post('editpractice', [App\Http\Controllers\PracticeController::class, 'update']);
Route::get('deleteP/{id}',[App\Http\Controllers\PracticeController::class, 'destroy']);

Route::get('editn/{id}', [App\Http\Controllers\NewsController::class, 'showData']);
Route::get('showN/{id}', [App\Http\Controllers\NewsController::class, 'showN'])->name('showNews');
Route::post('editnews', [App\Http\Controllers\NewsController::class, 'update']);
Route::get('deleteN/{id}',[App\Http\Controllers\NewsController::class, 'destroy']);

Route::get('editA/{id}', [App\Http\Controllers\AppointmentController::class, 'showData']);
Route::post('editAppoint', [App\Http\Controllers\AppointmentController::class, 'update']);
Route::get('deleteA/{id}',[App\Http\Controllers\AppointmentController::class, 'destroy']);

Route::get('showpractice/{id}', [App\Http\Controllers\PracticeController::class, 'showPrac']);

Route::get('dashboard', [PagesController::class, 'dash'])->name('dashboard');



Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/newsDetails', [PagesController::class, 'newsDetails'])->name('newsDetails');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/experiences', [PagesController::class, 'experiences'])->name('experiences');
Route::get('/practice-area', [PagesController::class, 'practiceArea'])->name('practiceArea');
Route::get('/company-investment-laws', [PagesController::class, 'companyInvestmentLaws'])->name('companyInvestmentLaws');
Route::get('/OilandGas', [PagesController::class, 'OilandGas'])->name('OilandGas');
Route::get('/telecomPatentTrademarks', [PagesController::class, 'telecomPatentTrademarks'])->name('telecomPatentTrademarks');
Route::get('/foreignInvestmentsDivestments', [PagesController::class, 'foreignInvestmentsDivestments'])->name('foreignInvestmentsDivestments');
Route::get('/commercialLaws', [PagesController::class, 'commercialLaws'])->name('commercialLaws');
Route::get('/bankingCorporateFinance', [PagesController::class, 'bankingCorporateFinance'])->name('bankingCorporateFinance');
Route::get('/labourLaw', [PagesController::class, 'labourLaw'])->name('labourLaw');
Route::get('/corporateGovernance', [PagesController::class, 'corporateGovernance'])->name('corporateGovernance');
Route::get('/securitesCmi', [PagesController::class, 'securitesCmi'])->name('securitesCmi');
Route::get('/realEstate', [PagesController::class, 'realEstate'])->name('realEstate');
Route::get('/familyLaw', [PagesController::class, 'familyLaw'])->name('familyLaw');
Route::get('/litigation', [PagesController::class, 'litigation'])->name('litigation');
Route::get('/companySecretariat', [PagesController::class, 'companySecretariat'])->name('companySecretariat');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// // Render in view
// Route::get('/appointment', [
//     'uses' => 'AppointmentController@createForm'
// ]);

// Post form data

// Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

