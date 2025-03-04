<?php

use App\Http\Controllers\Admin\AdminOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsController;


Route::prefix('stats')->group( function () {
    Route::get('orders-count', [StatsController::class, 'ordersCount']);
    Route::get('orders-sales-sum', [StatsController::class, 'ordersSalesSum']);
    Route::get('orders-count-by-day', [StatsController::class, 'ordersCountByDay']);
    Route::get('delivery-method-ratio', [StatsController::class, 'deliveryMethodRatio']);
});

Route::apiResource('orders', AdminOrderController::class);
