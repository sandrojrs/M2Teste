<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('cidades')->count() == 0){

            DB::table('cidades')->insert([

                [
                    'cidade' => 'Cuiabá',
                ],
                [
                    'cidade' => 'Diamantino',
                ],
                [
                    'cidade' => 'Nortelândia',
                ],

            ]);
        }
    }
}
