<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
     public function index(){
        $students = new StudentModel();
        $students = $students->all();

        return response()->json($students, 200, [], JSON_PRETTY_PRINT);
    }
    public function store(){

        $student = new StudentModel();

        $data = [
            'first_name' => 'John',
            'last_name' => 'Plonteras',
            'middle_name' => 'Combista',
            'gender' => 'Male',
            'dob' => '2004-06-19',
            'age' => '21',
        ];

        $student::create($data);
        return response()->json(['message' => 'Successfully created!'], 200, [], JSON_PRETTY_PRINT);
    }
}
