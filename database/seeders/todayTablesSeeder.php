<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\today_todos;
use Illuminate\Support\Str;
use App\database\factories\todayFactory;


class todayTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\today_todos::factory()->count(20)->create();

    }
}
