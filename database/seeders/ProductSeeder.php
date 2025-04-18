<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    //Заполнение таблицы продукта
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'image' => 'Banner_1.png',
                'title' => 'Triumph',
                'comment' => 'Bike  ',
                'price' => '299.49',
                'year' => '2021',
                'type_category_id' => '1',
            ],            [
                'image' => 'Banner_1.png',
                'title' => 'Yamaha',
                'comment' => 'Sport bike',
                'price' => '1239.49',
                'year' => '2022',
                'type_category_id' => '2',
            ],
        ]);
    }
}

