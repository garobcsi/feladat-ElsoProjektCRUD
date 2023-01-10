<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert(
            [
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'red','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'red','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'red','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>512],

                // Plus

                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'red','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'red','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'red','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'midnight','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'purple','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'starlight','soc' =>'A15 Bionic','memory_size'=>512],

                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>128],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>256],
                ['brand_id' =>1,'model'=>'iPhone 14 Plus','color'=>'blue','soc' =>'A15 Bionic','memory_size'=>512],

            ]
        );
    }
}
