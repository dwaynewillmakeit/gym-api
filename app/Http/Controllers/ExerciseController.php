<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return ExerciseResource::collection(Exercise::all());
    }

    public function image($folder, $filename)
    {

        $path = 'public/workout/' . $folder . "/" . $filename;

        if(!Storage::exists($path)){
            abort(404);
        }

        $file = Storage::disk('local')->get($path);

        $type = Storage::mimeType($filename);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);


        return $response;
    }


}
