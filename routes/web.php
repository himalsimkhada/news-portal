<?php

use App\Http\Controllers\admin\ApprovalRequests;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReorderController;
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
