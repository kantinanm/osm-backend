<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index()
    {
        return $this->user
            ->products()
            ->get();
    }
}
