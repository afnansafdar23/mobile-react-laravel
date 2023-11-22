<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ParentCategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\DefaultController;
use App\Http\Controllers\Setting\ColorController;
use App\Http\Middleware\Permissions;
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

// for components testing purpose

Route::withoutMiddleware([Permissions::class])->group(function () {
    Route::controller(AuthController::class)
        ->prefix('auth')
        ->name('auth.')
        ->group(function () {
            Route::get('login', 'loginView')->name('login');
            Route::post('login-user', 'userLogin')->name('login.user');
            Route::get('register', 'registerView')->name('register');
            Route::post('check-register', 'checkRegister')->name('check.register');
            Route::get('logout', 'logout')->name('logout');
        });

    Route::controller(DefaultController::class)
        ->group(function () {
            Route::get('/', 'home')->name('home');
            Route::get('category/{parentCategory}', 'productByCat')->name('category.product');
            Route::get('child/product/{childCategory:id}', 'productByChildCat')->name('category.product.child');
            Route::get('sub/product/{subCategory}', 'productBySubCat')->name('category.product.sub');
            Route::get('product/detail/{product}', 'detailedProduct')->name('product.details');
            Route::get('product/cart/{product:id}', 'addToCart')->name('product.add.cart');
            Route::patch('update/cart', 'updateCart')->name('update.cart');
            Route::delete('remove/cart', 'removeCart')->name('remove.from.cart');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('/blogs/all', 'allBlog')->name('all-blogs');
            Route::get('/blog/single', 'singleBlog')->name('single-blog');
            Route::get('/about', 'about')->name('about');
            Route::get('/career', 'career')->name('career');
            Route::get('/term/conditions', 'termCondition')->name('term-conditions');
            Route::get('/data/privacy', 'dataPrivacy')->name('data-privacy');
            Route::get('/web/login', 'webLogin')->name('web.login');
        });
});

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)
        ->prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{user}', 'edit')->name('edit');
            Route::post('update/{user}', 'update')->name('update');
            Route::get('delete/{user}', 'destroy')->name('delete');
        });

    Route::controller(OrderController::class)
        ->prefix('order')
        ->name('order.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('edit/{order}', 'edit')->name('edit');
            Route::post('update/{order}', 'update')->name('update');
            Route::get('delete/{order}', 'destroy')->name('delete');
        });

    Route::get('filemanager', [FileManagerController::class, 'index'])->name('file.index');
    Route::post('filemanager/upload', [FileManagerController::class, 'upload'])->name('file.upload');
    Route::post('file/store', [FileManagerController::class, 'store'])->name('file.store');
    Route::get('/file/get-image/{id}', [FileManagerController::class, 'getImage']);
    Route::delete('filemanager/{file}', [FileManagerController::class, 'delete'])->name('filemanager.delete');

    Route::controller(DashboardController::class)
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

    Route::controller(ParentCategoryController::class)
        ->prefix('parent/category')
        ->name('parent.category.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{parentCategory}', 'edit')->name('edit');
            Route::post('update/{parentCategory}', 'update')->name('update');
            Route::get('delete/{parentCategory}', 'destroy')->name('delete');
        });

    Route::controller(ChildCategoryController::class)
        ->prefix('child/category')
        ->name('child.category.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{childCategory}', 'edit')->name('edit');
            Route::post('update/{childCategory}', 'update')->name('update');
            Route::get('delete/{childCategory}', 'destroy')->name('delete');
        });

    Route::controller(SubCategoryController::class)
        ->prefix('sub/category')
        ->name('sub.category.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{subCategory}', 'edit')->name('edit');
            Route::post('update/{subCategory}', 'update')->name('update');
            Route::get('delete/{subCategory}', 'destroy')->name('delete');
        });

    Route::controller(ProductController::class)
        ->prefix('product')
        ->name('product.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{product}', 'edit')->name('edit');
            Route::post('update/{product}', 'update')->name('update');
            Route::get('delete/{product}', 'destroy')->name('delete');
        });

    Route::controller(RoleController::class)
        ->prefix('role')
        ->name('role.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{role}', 'edit')->name('edit');
            Route::post('update/{role}', 'update')->name('update');
            Route::get('delete/{role}', 'destroy')->name('delete');
        });

    Route::controller(PermissionController::class)
        ->prefix('permission')
        ->name('permission.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{permission}', 'edit')->name('edit');
            Route::post('update{permission}', 'update')->name('update');
            Route::get('delete/{permission}', 'destroy')->name('delete');
            Route::get('synchronize', 'synchronize')->name('synchronize');
        });

    Route::controller(ColorController::class)
        ->prefix('color')
        ->name('color.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::post('store', 'store')->name('store');
            Route::post('update{color}', 'update')->name('update');
            Route::get('destroy/{color}', 'destroy')->name('destroy');
        });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/cart', 'cart')->name('cart.product');
        Route::post('stripe', 'stripePost')->name('stripe.post');
        Route::post('store/order', 'storeOrder')->name('order.post');
    });
});
