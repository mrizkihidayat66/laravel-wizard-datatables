<?php

use App\Http\Controllers\OrderWizardController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Ycs77\LaravelWizard\Facades\Wizard;

Route::get('/', function () { return view('index'); })
     ->name('/');

Route::resource('products', ProductController::class)
     ->except(['show']);

Route::resource('coupons', CouponController::class)
     ->except(['show']);

Route::resource('orders', OrderController::class)
     ->except(['show']);

Wizard::routes('/orders/order', OrderWizardController::class, 'orders.order');

Route::get('orders/order/product/api', [OrderWizardController::class, 'apiProductDT'])
     ->name('orders.order.product.api');
Route::get('orders/order/coupon/api', [OrderWizardController::class, 'apiCouponDT'])
     ->name('orders.order.coupon.api');
