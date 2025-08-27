<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Session;

class StatisticsController extends Controller
{
    public function showStatistics()
    {
        $user_id = Auth::id();

        if (Session::has("statistics_$user_id")) {
            $statistics = Session::get("statistics_$user_id");
        } else {

            $faker = Faker::create();
            $statistics = [];
            for ($i = 0; $i < 7; $i++) {
                $date = now()->subDays($i)->format('Y-m-d');
                $statistics[$date] = [
                    'earnings' => $faker->randomFloat(2, 50, 300),
                    'total_time' => $faker->randomFloat(1, 1, 8),
                ];
            }


            Session::put("statistics_$user_id", $statistics);
        }

        return view('statistics/provider', compact('statistics'));
    }
}
