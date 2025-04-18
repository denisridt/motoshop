<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    //Заполнение таблицы ролей
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Админ',
                'code' => 'Admin',
            ],
            [
                'name' => 'Пользователь',
                'code' => 'User',
            ],
        ]);
    }
}
