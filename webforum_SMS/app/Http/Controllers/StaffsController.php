<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\Staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class StaffsController extends Controller
{
    // FETCHING ALL STAFF RECORDS FROM DATABASE
    public function index()
    {
        $staffs= Staff::all();
        return $staffs;;
    }

    //TO FETCH SINGLE STAFF
    public function getSingle(Request $request, $id)
    {
        $staffs= Staff::where('id', $id)->first();
        return $staffs;
    }

        // SAVING NEW TEACHER RECORD TO DATABASE
    public function store(Request $request) {
      $validator = Validator::make($request->all(), [
             'first_name' => 'required|min:3|max:50|alpha',            
             'last_name' => 'required|min:3|max:50|alpha',            
             'email' => 'required|min:3|unique:staff|max:50',            
            'identity_num' => 'required|max:255|unique:staff|',
            'role' => 'required|alpha',
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

    //UPDATING STAFF RECORDS IN THE DATABASE
        public function update(Request $request, $id)
    {
        $user = Staff::find($id); 
         $validator = Validator::make($request->all(), [
             'first_name' => 'required|min:3|max:255|alpha',            
             'last_name' => 'required|min:3|max:50|max:255|alpha',            
             'email' => 'required|min:3|max:255|unique:staff,email,' . $user->id,            
            'identity_num' => 'required|max:255|unique:staff,identity_num,' . $user->id,
            'role' => 'required|alpha',
            'subject_taken' => 'required|max:255|alpha_dash',
            'mobile_number' => 'required|min:3|max:255',
            // 'password' => 'required|min:6|max:255',
        ]);
        if ($validator->fails())
         {
                 return response()->json($validator->errors()->all(),400);
         }
//updaing record
       $Staff =  Staff::find($id);    
       $Staff->first_name = $request->input('first_name');
       $Staff->last_name = $request->input('last_name');
       $Staff->email = $request->input('email');
       $Staff->identity_num = $request->input('identity_num');
       $Staff->role = $request->input('role');
       $Staff->subject_taken = $request->input('subject_taken');
       $Staff->mobile_number = $request->input('mobile_number');
    //    $Staff->password = Hash::make($request->input('password'));
     if ($Staff->save())
      {
              return response()->json(['message' => 'resources updated  successfully'], 200);
     }else 
     {
            return response()->json(['message' => 'Error while saving resources'], 400);
     }

    }

    //DELETING RECORD FROM THE DATABASE
       public function destroy($id)
    {
        $Staff =  Staff::find($id);
        if ($Staff->delete()) {
              return response()->json(['message' => 'resources deleted successfully'], 200);
        }else {
             return response()->json(['message' => 'Error while deleting resources'], 400);

        }
        

    }
}
