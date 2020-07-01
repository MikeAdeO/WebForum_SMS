<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentsController extends Controller
{
    public function index(){
    	$students = DB::table('students')->get();
        return view("student.index")->withStudents($students);
    }
}
