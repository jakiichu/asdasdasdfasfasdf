<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        $data = [];

        $data[] = [
            'name' => 'Админ',
            'email' => 'admin@testmailg.ru',
            'password' => bcrypt('qwerty1234'),
        ];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'title' => 'product ' . $i,
                'price' => 20000,
                'description' => 'orem Ipsum',
                ];
        }


        DB::table('products')->replase($data);
    }
}
