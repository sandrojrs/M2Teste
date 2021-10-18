<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescontoProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('desconto_produto_campanhas')->count() == 0){

            DB::table('desconto_produto_campanhas')->insert([

                [
                    "desconto_produto_campanha" => "10%",
                    "campanha_id" => 1

                ],
            ]);

        }
    }
}
