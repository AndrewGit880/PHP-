<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        Order::truncate();

        $users = User::all();

        foreach ($users as $user) {

            for ($day = 6; $day >= 0; $day--) {
                $date = Carbon::now()->subDays($day);

                if (rand(1, 100) <= 5) {
                    continue;
                }

                $ordersCount = rand(1, 3);
                $totalHoursDay = 0;

                for ($i = 0; $i < $ordersCount; $i++) {

                    $orderHours = rand(10, 40) / 10;

                    if ($totalHoursDay + $orderHours > 8) {
                        $orderHours = 8 - $totalHoursDay;
                    }

                    if ($orderHours <= 0) {
                        break;
                    }

                    $hourlyRate = rand(500, 2000);
                    $orderEarnings = $orderHours * $hourlyRate;

                    Order::create([
                        'provider_id' => $user->id,
                        'service_id' => rand(1, 10),
                        'total_time' => number_format($orderHours, 2, '.', ''),
                        'earnings' => number_format($orderEarnings, 2, '.', ''),
                        'status' => 'confirmed',
                        'created_at' => $date->copy()->addHours(rand(9, 18)),
                        'updated_at' => $date->copy()->addHours(rand(9, 18)),
                    ]);

                    $totalHoursDay += $orderHours;

                    if ($totalHoursDay >= 8) {
                        break;
                    }
                }
            }
        }
    }
}
