<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('booking')->delete();

        DB::table('room')->insert([

            [
                'name' => '1114',
                'capacity' => 6,
                'floor' => 11,
                'has_projector' => true,
                'has_whiteboard' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => '1115',
                'capacity' => 7,
                'floor' => 11,
                'has_projector' => true,
                'has_whiteboard' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => '1116',
                'capacity' => 5,
                'floor' => 11,
                'has_projector' => true,
                'has_whiteboard' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => '1011',
                'capacity' => 6,
                'floor' => 10,
                'has_projector' => false,
                'has_whiteboard' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
