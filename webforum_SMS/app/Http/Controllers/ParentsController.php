<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index(){
        return view("parent.index");
    }
}
