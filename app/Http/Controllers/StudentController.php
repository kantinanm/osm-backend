<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    //
    //protected $user;

    public function __construct()
    {
        //$this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index()
    {
        return  StudentResource::collection(Student::all());
    }

    public function show($id)
    {
        //
        $student=Student::Where('student_id',$id)->get();
        return  StudentResource::collection($student);
    }
}
