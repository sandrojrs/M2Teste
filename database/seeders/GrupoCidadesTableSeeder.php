<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoCidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('grupo_cidades')->count() == 0){

            DB::table('grupo_cidades')->insert([

                [
                    "grupo_cidade" => "Mato Grosso",

                ]

            ]);

        }
    }
}
