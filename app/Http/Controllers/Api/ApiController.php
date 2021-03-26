<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function getFirstStudent(){

        //questa chiamata api mi ritornerà i dati del mio primo studente

        $firstS = Student::orderBy('id', 'asc')->first();
        return response()->json($firstS);


    }
}
