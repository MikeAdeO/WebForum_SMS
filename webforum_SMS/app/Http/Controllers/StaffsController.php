<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\Staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class StaffsController extends Controller
{
    // FETCHING ALL RECORDS FROM DATABASE
    public function index(){
        $staffs= Staff::all();
        return $staffs;;
    }

        // SAVING NEW TEACHER RECORD TO DATABASE
    public function store(Request $request) {
      $validator = Validator::make($request->all(), [
             'first_name' => 'required|min:3|max:50|',            
             'last_name' => 'required|min:3|max:50',            
             'email' => 'required|min:3|unique:staff|max:50',            
            'identity_num' => 'required|max:255|unique:staff|',
            'role' => 'required',
            'subject_taken' => 'required|max:255|',
            'mobile_number' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:255',
        ]);
        if ($validator->fails())
         {
                 return response()->json($validator->errors()->all(),400);

            }

          //saving to db
       $Staff = new Staff;
       $Staff->first_name = $request->input('first_name');
       $Staff->last_name = $request->input('last_name');
       $Staff->email = $request->input('email');
       $Staff->identity_num = $request->input('identity_num');
       $Staff->role = $request->input('role');
       $Staff->subject_taken = $request->input('subject_taken');
       $Staff->mobile_number = $request->input('mobile_number');
       $Staff->password = Hash::make($request->input('password'));
     if ($Staff->save())
      {
             return response()->json(['message' => 'resources save successfully'], 200);
     }else 
     {
            return response()->json(['message' => 'Error while saving resources'], 400);

     }


    }
}
