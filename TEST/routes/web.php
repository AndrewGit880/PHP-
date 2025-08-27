<?php

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/statistics/provider', [StatisticsController::class, 'showStatistics'])->name('statistics.provider')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/seed-orders', function () {
    if (Auth::check()) {
        $providerId = Auth::id();
        Order::where('provider_id', $providerId)->delete();

        $statuses = ['confirmed'];
        $startDate = Carbon::now()->subDays(6);

        for ($i = 0; $i < 7; $i++) {
            $currentDate = $startDate->copy()->addDays($i);
            $numOrders = rand(1, 5);

            for ($j = 0; $j < $numOrders; $j++) {
                $earnings = round(mt_rand(50 * 100, 300 * 100) / 100, 2);
                $totalTime = round(mt_rand(5 * 10, 40 * 10) / 10, 2);

                Order::create([
                    'provider_id' => $providerId,
                    'service_id' => rand(1, 5),
                    'total_time' => (string)$totalTime,
                    'earnings' => (string)$earnings,
                    'status' => $statuses[array_rand($statuses)],
                    'created_at' => $currentDate,
                    'updated_at' => $currentDate,
                ]);
            }
        }

        return "Тестовые заказы добавлены для пользователя ID: {$providerId}";
    }

    return "Пожалуйста, авторизуйтесь, чтобы добавить тестовые заказы.";
});
