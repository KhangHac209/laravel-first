<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/product_category')
    ->name('admin.product_category.')
    ->controller(ProductCategoryController::class)
    ->middleware('check.user.admin')->group(function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('index', 'index')->name('index');
        Route::post('slug', 'makeSlug')->name('slug');
        Route::post('destroy/{productCategory}', 'destroy')->name('destroy');
        Route::post('restore/{id}',  'restore')->name('restore');
        Route::get('detail/{productCategory}', 'detail')->name('detail');
        Route::post('update/{productCategory}', 'update')->name('update');
    });
Route::name('admin')->resource('admin/product', ProductController::class)->middleware('check.user.admin');
// Route::prefix('admin/product')
//     ->name('admin.product.')
//     ->controller(ProductController::class)
//     ->middleware('check.user.admin')->group(function () {
//         Route::get('create', 'create')->name('create');
//         Route::post('store', 'store')->name('store');
//         Route::get('index', 'index')->name('index');
//         //Route::post('slug', 'makeSlug')->name('slug');
//         // Route::post('destroy/{productCategory}', 'destroy')->name('destroy');
//         // Route::post('restore/{id}',  'restore')->name('restore');
//         // Route::get('detail/{productCategory}', 'detail')->name('detail');
//         // Route::post('update/{productCategory}', 'update')->name('update');
//     });
Route::get('product/pepsi', function () {
    echo '<h1>pepsi</h1>';
})->middleware('check.user.login');

Route::get('product/hennesy', function () {
    echo '<h1>hennesy</h1>';
})->middleware('check.user.login.and.adult');

Route::get('product/lavie', function () {
    echo '<h1>lavie</h1>';
});
