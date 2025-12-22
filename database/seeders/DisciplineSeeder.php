<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $disciplines = [
            [
                'name' => 'Ciencias',
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Humanidades',
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Tecnología',
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
        ];

        DB::table('disciplines')->insert($disciplines);
    }
}
