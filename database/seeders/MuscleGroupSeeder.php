<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muscle_groups')->insert([
            ['id'=>1, 'name'=>'Core','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2, 'name'=>'Arm','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3, 'name'=>'Back','created_at'=>now(),'updated_at'=>now()],
            ['id'=>4, 'name'=>'Chest','created_at'=>now(),'updated_at'=>now()],
            ['id'=>5, 'name'=>'Legs & Glutes','created_at'=>now(),'updated_at'=>now()],
            ['id'=>6, 'name'=>'Shoulders','created_at'=>now(),'updated_at'=>now()],
            ['id'=>7, 'name'=>'Cardiovascular System','created_at'=>now(),'updated_at'=>now()]


        ]);
    }
}
