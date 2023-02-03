<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crud;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Crud::factory(10)->create();
    }
}
