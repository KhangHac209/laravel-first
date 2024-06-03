<?php

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('master', function () {
    return view('client.layout.master');
});
Route::get('home', function () {
    return view('client.pages.home');
});
Route::get('product_list', function () {
    return view('client.pages.product_list');
});
Route::get('product_detail', function () {
    return view('client.pages.product_detail');
});
Route::get('blog', function () {
    return view('client.pages.blog');
});
Route::get('blog_detail', function () {
    return view('client.pages.blog_detail');
});
Route::get('cart', function () {
    return view('client.pages.cart');
});
Route::get('checkout', function () {
    return view('client.pages.checkout');
});
Route::get('contact', function () {
    return view('client.pages.contact');
});
Route::get('master-admin', function () {
    return view('admin.layout.master');
});                                                                 

Route::get('admin/product', function () {
    return view('admin.pages.product');
});

Route::get('admin/product-category', function () {
    return view('admin.pages.productCategory');
});

Route::get('admin/product-create', function () {
    return view('admin.pages.productCreate');
});






// Route::get('test', function () {
//     echo 'testttt';
// });

// Route::get('test/a/b/c', function () {
//     echo '<h1>d</h1>';
// });

// Route::get('product/detail/{id}', function ($id) {
//     echo "Product Id: $id";
// });

// Route::get('product/detail/{id}/category/{category?}', function ($id, $categoryId = 17) {
//     echo "Product Id: $id  Category Id: $categoryId";
// });

// Route::get('name/{name}/yearBorn/{yearBorn?}', function ($name, $yearBorn = 0) {
//     $yearBorn = date('Y');
//     return "Name: $name <br> YearBorn: $yearBorn";
// });

// Route::get('product/create', function () {
//     return view('product.create');
// });
// Route::get('product/index', function () {
//     return view('product.index');
// });
// Route::get('product/scores', function () {
//     return view('product.scores');
// });
// Route::get('layout', function () {
//     return view('layout.index');
// });
// Route::get('php', function () {
//     return view('pages.php');
// });
// Route::get('js', function () {
//     return view('pages.js');
// });
// Route::get('java', function () {
//     return view('pages.java');
// });
