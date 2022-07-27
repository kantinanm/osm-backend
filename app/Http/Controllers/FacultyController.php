<?php

namespace App\Http\Controllers;


use App\Models\Faculty;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\FacultiesCollection;
use App\Http\Resources\FacultyResource;

class FacultyController extends Controller
{
    //
    public function __construct()
    {
        //$this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index()
    {
 
        //return  FacultyResource::collection(Faculty::all());
        //return new FacultiesCollection(Faculty::all());
        return new FacultiesCollection(Faculty::where('fac_name_th', 'like', 'Chinese%')->take(10)->get());
    }

    public function show($id)
    {
        //
        //$student=Student::Where('student_id',$id)->get();
        //return  StudentResource::collection($student);
    }
}
