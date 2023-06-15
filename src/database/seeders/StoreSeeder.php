<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i= 0 ; $i< 5; $i++){
            DB::table('store')->insert([
                'name' => Str::random(10),
                'phoneNumber' =>00000000000,
                'municipality' => '川越市',
                'adress' => '川越1-2-3',
                'description' =>'格安'
            ]);
        };
    }
}
