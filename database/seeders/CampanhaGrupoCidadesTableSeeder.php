<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampanhaGrupoCidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('campanha_grupo_cidades')->count() == 0){

            DB::table('campanha_grupo_cidades')->insert([

                [
                    "campanha_grupo_cidade"=> "lançamento verão",
                    "grupo_cidades_id"=> 1,
                    "produto_id" => 1,
                    "user_id" => 1

                ],
            ]);

        }
    }
}
