<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        $appointments = include database_path('seeders/data/appointments.php');

        $userIds = User::pluck('id')->toArray();

        foreach ($appointments as &$appointment) {
            $appointment['user_id'] = $userIds[array_rand($userIds)];
            $appointment['created_at'] = now();
            $appointment['updated_at'] = now();
        }

        DB::table('appointments')->insert($appointments);
    }
}
