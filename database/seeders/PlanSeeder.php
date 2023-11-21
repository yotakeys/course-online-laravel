<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $json = file_get_contents(database_path('seeders/json/plan.json'));
        $plans = json_decode($json, true);

        $payload = [];
        foreach ($plans as $plan) {
            $payload[] = [
                'id' => $plan['id'],
                'name' => $plan['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('plans')->insert($payload);
    }
}