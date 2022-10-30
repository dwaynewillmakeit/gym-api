<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;

    public function muscleGroup(){
        return $this->belongsTo(MuscleGroup::class,'muscle_group_id','id');
    }
}
