<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCategorySeeder extends Seeder
{
    //Заполнение таблицы категорий
    public function run()
    {
        DB::table('type_categories')->insert([
            ['id' => 1, 'name' => 'Bike'],
            ['id' => 2, 'name' => 'Sport Bike'],
        ]);
    }
}
