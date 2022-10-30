<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muscles')->insert([
            ['id'=>1, 'name'=>'Abductors','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>2, 'name'=>'Abs','muscle_group_id'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>3, 'name'=>'Adductors','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>4, 'name'=>'Biceps','muscle_group_id'=>2,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>5, 'name'=>'Calves','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>6, 'name'=>'Cardiovascular System','muscle_group_id'=>7,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>7, 'name'=>'Delts','muscle_group_id'=>6,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>8, 'name'=>'Forearms','muscle_group_id'=>2,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>9, 'name'=>'Glutes','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>10, 'name'=>'Hamstrings','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>11, 'name'=>'Lats','muscle_group_id'=>3,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>12, 'name'=>'Levator Scapulae','muscle_group_id'=>3,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>13, 'name'=>'Pectorals','muscle_group_id'=>4,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>14, 'name'=>'Quads','muscle_group_id'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>15, 'name'=>'Serratus Anterior','muscle_group_id'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>16, 'name'=>'Traps','muscle_group_id'=>3,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>17, 'name'=>'Triceps','muscle_group_id'=>2,'created_at'=>now(),'updated_at'=>now()],
            ['id'=>18, 'name'=>'Upper Back','muscle_group_id'=>3,'created_at'=>now(),'updated_at'=>now()]

        ]);
    }
}
