<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('produtos')->count() == 0){

            DB::table('produtos')->insert([

                [
                    'produto' => 'Sofá',
                ],
                [
                    'produto' => 'Cadeira',
                ],
                [
                    'produto' => 'Mesa',
                ],

            ]);
        }
    }
}
