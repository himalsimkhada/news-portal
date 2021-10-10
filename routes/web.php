<?php

use App\Http\Controllers\admin\ApprovalRequests;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\Admin\ReorderController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\HomeController;
use App\Models\Admin\Poster;
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

// post details
Route::get('/news/{slug}', [HomeController::class, 'show'])->name('nepali.details');
// category post
Route::get('/category/{slug}', [HomeController::class, 'categoryPost'])->name('nepali.category');
// for getting related posts
Route::get('/related-post/{slug}', [HomeController::class, 'relatedPost'])->name('nepali.related-post');
// for getting tag wise posts
Route::get('/tag-post/{tag}', [HomeController::class, 'tagPost'])->name('nepali.tag-post');
//about us
Route::view('/about-us', 'nepali.about-us')->name('nepali.about-us');
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
    Route::resource('poster', PosterController::class);

    // Single Routes
    Route::get('category-children-reorder/{category}', [ReorderController::class, 'categoryChildrenReorder'])->name('categoryChildrenReorder');

    //Approval Requests Admin route
    Route::get('/portal/requests', [ApprovalRequests::class, 'index'])->name('requests.index');
    Route::get('/portal/request/accept/{id}', [ApprovalRequests::class, 'update'])->name('requests.update');

    Route::get('/site-settings/index', [SiteSettingController::class, 'index'])->name('site-setting.index');
    Route::post('/site-settings/update', [SiteSettingController::class, 'update'])->name('site-setting.update');

    Route::get('/pie-chart', [ChartDataController::class, 'pieChart'])->name('pie-chart');  
});
