<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert(
            [
                ["name" => 'apple'],
                ["name" => 'samsung'],
                ["name" => 'xiaomi'],
                ["name" => 'xiaomi'],
                ["name" => 'huawei'],
                ["name" => 'sony'],
                ["name" => 'google'],
                ["name" => 'nokia'],
                ["name" => 'zte'],

            ]
        );
    }
}
