<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('competences')->insert([
            ['name' => 'WORDPRESS', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'WIDGET', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'PHP', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'POO', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'MySQL', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'MVC', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'COMPOSER', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'UML', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'BOOTSTRAP', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'SYMFONY', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'API REST', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'PHPUNIT', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'CODACY', 'created_at' => $now, 'updated_at' => $now,],
            ['name' => 'BLACKFIRE', 'created_at' => $now, 'updated_at' => $now,],
        ]);
    }
}
