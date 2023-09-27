<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [MainController::class, "homepage"])->name("homepage");

Route::get("/category/{category}",[CategoryController::class, "index"])->name("productsByCategory");

Route::group(["prefix" => "/products", "controller" => ProductController::class], function () {
    Route::get("/", "products")->name("products.index");
    Route::get("/{product}", "product")->name("products.show");
});

Route::group(["controller" => AuthController::class], function () {
    Route::get("/login", "getLoginPage")->name("auth.loginPage");
    Route::post("/login", "login")->name("auth.login");
    Route::get("/register", "getRegisterPage")->name("auth.registerPage");
    Route::post("/register", "register")->name("auth.register");
    Route::get("/logout", "logout")->name("auth.logout");
});

Route::get("email/verify", [VerificationController::class, "view"])->middleware("auth")->name("verification.notify");
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'handle'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['prefix' => '/account', 'controller' => AccountController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'account')->name('account.show');
    Route::post('/', 'updateAccount')->name('account.update');
});

Route::group(['prefix' => '/cart', 'controller' => CartController::class], function () {
    Route::get('/', 'getCart')->name('cart.get');
    Route::post('/{product}/add', 'add')->name('cart.add');
    Route::get('/{product}/remove', 'remove')->name('cart.remove');
    Route::get('/clear', 'clear')->name('cart.clear');
});

Route::get("/carts", [CartController::class, "carts"])->name("carts");

Route::get('/changeLang', [MainController::class, 'changeLang'])->name('changeLang');

Route::get("/export-excel", [MainController::class, "exportExcel"])->name("export.excel");
Route::get("/upload-excel", [MainController::class, "uploadExcel"])->name("upload.excel");

Route::get("/order/{order}/payment/create", [OrderController::class, "createPayment"])->name("payment.create");
Route::get("/order/payment/callback/{hash}", [OrderController::class, "callback"])->name("payment.callback");


Route::get('/forget-password', [ForgetPasswordController::class, 'forgotPasswordView'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendResetLink'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPasswordView'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgetPasswordController::class, 'resetPassword'])->middleware('guest')->name('password.update');

Route::get('/order/create', [OrderController::class, 'createOrder'])->name('order.create');

Route::get('/google/auth/redirect', [AuthController::class, "googleRedirect"])->name("google.redirect");
Route::get('/google/auth/callback', [AuthController::class, "googleCallback"])->name("google.callback");
Route::get('/steam/auth/redirect', [AuthController::class, 'steamRedirect'])->name('steam.redirect');
Route::get('/steam/auth/callback', [AuthController::class, 'steamCallback'])->name('steam.callback');
