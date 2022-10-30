<?php

namespace App\Http\Controllers;

use App\Http\Resources\MuscleGroupResource;
use App\Models\MuscleGroup;
use Illuminate\Http\Request;

class MuscleGroupController extends Controller
{
    public function index(){

        return MuscleGroupResource::collection(MuscleGroup::all());
    }
}
