<?php

namespace Database\Seeders;

use App\Models\villageois;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        villageois::factory(2)->create();
        $this->call(EntreprisesTableSeeder::class);
    }
}
