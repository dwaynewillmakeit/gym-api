<?php

namespace App\Http\Controllers;

use App\Http\Resources\EquipmentResource;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{

    public function index(){

        return EquipmentResource::collection(Equipment::orderBy('name')->get());
    }
}
