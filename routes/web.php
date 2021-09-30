<?php

use App\Http\Controllers\admin\ApprovalRequests;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReorderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::admineticAuth();
Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/english', [HomeController::class, 'englishIndex'])->name('english.index');
// Route::get('/nepali', [HomeController::class, 'nepaliIndex'])->name('nepali.index');

// post details
Route::get('/details/{slug}', [HomeController::class, 'show'])->name('nepali.details');
// category post
Route::get('/category/{slug}', [HomeController::class, 'categoryPost'])->name('nepali.category');
// for getting related posts
Route::get('/allPost/{id}', [HomeController::class, 'allPost'])->name('nepali.allPost');
//about us
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('nepali.about-us');

//calender
Route::view('/calender', 'nepali.calender')->name('nepali.calender');
//unicode
Route::view('/unicode', 'nepali.unicode')->name('nepali.unicode');
//forex
Route::view('/forex', 'nepali.forex')->name('nepali.forex');
//gold and silver
Route::view('/gold-silver', 'nepali.goldandsilver')->name('nepali.gold-silver');

//contact-us
Route::get('/contactus', [HomeController::class, 'contactUsView'])->name('nepali.view.contact-us');
Route::post('/contactus/submit', [HomeController::class, 'contactUsForm'])->name('nepali.submit.contactus');

// Resourcefull Routes
Route::group(['prefix' => config('adminetic.prefix', 'admin'), 'middleware' => config('adminetic.middleware')], function () {
    // Restful Routes
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    // Single Routes
    Route::get('category-children-reorder/{category}', [ReorderController::class, 'categoryChildrenReorder'])->name('categoryChildrenReorder');

    //Approval Requests Admin route
    Route::get('/portal/requests', [ApprovalRequests::class, 'index'])->name('requests.index');
    Route::get('/portal/request/accept/{id}', [ApprovalRequests::class, 'update'])->name('requests.update');
});
