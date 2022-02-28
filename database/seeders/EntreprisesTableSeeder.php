<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntreprisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("entreprises")->insert ([
        ["libelle"=>"Medianet"],
        ["libelle"=>"Express Fm"],
        ["libelle"=>"sapphire"],
    ] );

    }
}
