<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('admin/product_category/create', [ProductCategoryController::class, 'create']);
Route::post('admin/product_category/store', [ProductCategoryController::class, 'store']);
