<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Obtener los IDs de las disciplinas
        $ciencias = DB::table('disciplines')->where('name', 'Ciencias')->first();
        $humanidades = DB::table('disciplines')->where('name', 'Humanidades')->first();
        $tecnologia = DB::table('disciplines')->where('name', 'Tecnología')->first();

        $subjects = [
            // Asignaturas de Ciencias
            [
                'name' => 'Matemáticas',
                'discipline_id' => $ciencias->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Física',
                'discipline_id' => $ciencias->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Química',
                'discipline_id' => $ciencias->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Biología',
                'discipline_id' => $ciencias->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],

            // Asignaturas de Humanidades
            [
                'name' => 'Historia',
                'discipline_id' => $humanidades->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Filosofía',
                'discipline_id' => $humanidades->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Literatura',
                'discipline_id' => $humanidades->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Geografía',
                'discipline_id' => $humanidades->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],

            // Asignaturas de Tecnología
            [
                'name' => 'Programación',
                'discipline_id' => $tecnologia->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Bases de Datos',
                'discipline_id' => $tecnologia->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Redes',
                'discipline_id' => $tecnologia->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'name' => 'Seguridad Informática',
                'discipline_id' => $tecnologia->id,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => 1,
            ],
        ];

        DB::table('subjects')->insert($subjects);
    }
}
