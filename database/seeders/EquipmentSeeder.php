<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
            ['id'=>1, 'name'=>'Assisted Pull Up Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2, 'name'=>'Back Extention Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3, 'name'=>'Barbell','created_at'=>now(),'updated_at'=>now()],
            ['id'=>4, 'name'=>'Box','created_at'=>now(),'updated_at'=>now()],
            ['id'=>5, 'name'=>'Buso Ball','created_at'=>now(),'updated_at'=>now()],
            ['id'=>6, 'name'=>'Cable','created_at'=>now(),'updated_at'=>now()],
            ['id'=>7, 'name'=>'Cable Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>8, 'name'=>'Calf Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>9, 'name'=>'Deltoid Raise Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>10, 'name'=>'Dip Station','created_at'=>now(),'updated_at'=>now()],
            ['id'=>11, 'name'=>'Dumbbell','created_at'=>now(),'updated_at'=>now()],
            ['id'=>12, 'name'=>'Exercise Ball','created_at'=>now(),'updated_at'=>now()],
            ['id'=>13, 'name'=>'EZ Barbell','created_at'=>now(),'updated_at'=>now()],
            ['id'=>14, 'name'=>'Hip Abduction','created_at'=>now(),'updated_at'=>now()],
            ['id'=>15, 'name'=>'Hyperextension Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>16, 'name'=>'Kettlebell ','created_at'=>now(),'updated_at'=>now()],
            ['id'=>17, 'name'=>'Leg Press Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>18, 'name'=>'Body Weight','created_at'=>now(),'updated_at'=>now()],
            ['id'=>19, 'name'=>'Pull Up Bar','created_at'=>now(),'updated_at'=>now()],
            ['id'=>20, 'name'=>'Resistance Band','created_at'=>now(),'updated_at'=>now()],
            ['id'=>21, 'name'=>'Shoulder Press Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>22, 'name'=>'Smith Machine','created_at'=>now(),'updated_at'=>now()],
            ['id'=>23, 'name'=>'Stability Ball','created_at'=>now(),'updated_at'=>now()],
            ['id'=>24, 'name'=>'Trap Bar','created_at'=>now(),'updated_at'=>now()],
            ['id'=>25, 'name'=>'Weight Plate','created_at'=>now(),'updated_at'=>now()]        

        ]);
    }
}
