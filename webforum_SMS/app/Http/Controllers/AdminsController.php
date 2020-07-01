<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin; 
use DB;

class AdminsController extends Controller
{
    public function index(){
    	$admins = DB::table('admins')->get();

    	return view('admin.index')->withAdmins($admins);
    }
}
