<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelacaoGrupoCidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('relacao_grupo_cidades')->count() == 0){

            DB::table('relacao_grupo_cidades')->insert([

                [
                    "grupo_cidades_id" => 1,
                    "cidade_id" => 1,

                ]   ,
                [
                    "grupo_cidades" => 1,
                    "cidade_id" => 2,

                ]

            ]);

        }
    }
}
