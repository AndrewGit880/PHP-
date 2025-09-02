<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $userId = auth()->id();
        $statistics = $this->getUserStatistics($userId);

        return view('statistics', compact('statistics'));
    }

    private function getUserStatistics($providerId)
{
    $startDate = Carbon::now()->subDays(6)->startOfDay();
    $endDate = Carbon::now()->endOfDay();

    $stats = Order::where('provider_id', $providerId)
        ->where('status', 'confirmed')
        ->whereBetween('created_at', [$startDate, $endDate])
        ->get()
        ->groupBy(function($order) {
            return $order->created_at->format('Y-m-d');
        });

    $sevenDays = collect();
    for ($i = 6; $i >= 0; $i--) {
        $date = Carbon::now()->subDays($i)->format('Y-m-d');
        $dateFormatted = Carbon::now()->subDays($i)->format('d.m.Y');

        $dayStats = $stats->get($date, collect());

        $totalEarnings = $dayStats->sum(function($order) {
            return (float) str_replace(',', '.', $order->earnings);
        });

        $totalHours = $dayStats->sum(function($order) {
            return (float) str_replace(',', '.', $order->total_time);
        });

        $sevenDays->push([
            'date' => $date,
            'total_earnings' => $totalEarnings,
            'total_hours' => $totalHours,
            'formatted_date' => $dateFormatted
        ]);
    }

    return $sevenDays;
    }
}
