<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    // Запуск сеялки базы данных.
    public function run(): void
    {
        // Вставка данных в таблицу 'carts'
        DB::table('carts')->insert([
            [
                'order_id'=>'1', // Установить ID заказа
                'product_id'=>'1', // Установить ID продукта
            ],
        ]);
    }
}
