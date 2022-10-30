<?php

namespace App\Http\Controllers;

use App\Http\Resources\MuscleResource;
use App\Models\Muscle;
use Illuminate\Http\Request;

class MuscleController extends Controller
{
    public function index(){
        return MuscleResource::collection(Muscle::all());
    }
}
