<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class StudentController extends Controller
{
    public function studentupdate(Request $request){
        $student_id=Session::get('Student_id');
        $data=array();
        $data['Student_name']=$request->Student_name;
        $data['Student_address']=$request->Student_address;
        $data['Student_password']=$request->Student_password;
       
        DB::table('student')
                ->where('Student_id',$student_id)
                ->update($data);

          Session::put('exception','Student update successfuly');
          return Redirect::to('/student_setting');
           // print_r($Student_id);
    }
}
