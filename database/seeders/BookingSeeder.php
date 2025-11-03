<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('booking')->delete();

        DB::table('booking')->insert([
            [
                'room_id' => 1,
                'user_name' => 'Ivanov I.I.',
                'date' => '2025-10-20',
                'start_time' => '09:00',
                'end_time' => '10:00',
                'purpose' => 'meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 3,
                'user_name' => 'Petrov P.I.',
                'date' => '2025-10-14',
                'start_time' => '09:00',
                'end_time' => '11:00',
                'purpose' => 'meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 4,
                'user_name' => 'Soloviev I.S.',
                'date' => '2025-10-22',
                'start_time' => '12:00',
                'end_time' => '15:00',
                'purpose' => 'meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 1,
                'user_name' => 'Petrov P.I.',
                'date' => '2025-10-20',
                'start_time' => '11:00',
                'end_time' => '12:00',
                'purpose' => 'meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 2,
                'user_name' => 'Smirnov V.V.',
                'date' => '2025-10-19',
                'start_time' => '09:00',
                'end_time' => '12:00',
                'purpose' => 'meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
