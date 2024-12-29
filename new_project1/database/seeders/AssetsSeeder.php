<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        DB::table('assets')->insert([
            ['name' => 'Mouse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Keyboard', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Monitor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CPU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Water bottle', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tissue paper', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table fan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
