<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i= 0 ; $i< 5; $i++){
            DB::table('courses')->insert([
                'name' => 'Yシャツ',
                'storeId' => 1,
                'size' =>'L',
                'icon' =>'egwRxXNGzYP6YAfggaICddf0Fdl2khFSwyRPXEzZ.webp',
                'price'=> 1500
            ]);
        };
    }
}
