<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    //Заполнение таблицы заказов.
    public function run()
    {
        DB::table('orders')->insert([
            [
                'total_price' => '499.99', // Общая стоимость заказа
                'user_id' => '1', // ID пользователя, сделавшего заказ
            ],
        ]);
    }
}
