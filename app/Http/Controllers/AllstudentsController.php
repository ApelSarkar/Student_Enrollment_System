<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AllstudentsController extends Controller
{
    
    public function allstudent(){

        $allstudent_info=DB::table('student')->get();

        $manage_student=view('admin.allstudent')->with('allstudent_info',$allstudent_info);

        return view('layout')->with('allstudent',$manage_student);

       
    }

    public function s_delete($Student_id){
        DB::table('student')
        ->where('Student_id',$Student_id)
        ->delete();

        return redirect::to('/allstudent');
     
    }
    
    public function studentview ($Student_id){
        $student_description_view=DB::table('student')
                                ->select('*')
                                ->where('Student_id',$Student_id)
                                ->first();

        //print_r( $student_description_view);

        $manage_student=view('admin.view')
                        ->with('student_description_profile',$student_description_view);

            return view('layout')
                    ->with('view',$manage_student);

    }

    public function studentedit($Student_id){
        $student_description_view=DB::table('student')
                                ->select('*')
                                ->where('Student_id',$Student_id)
                                ->first();

        
                                $manage_student=view('admin.student_edit')
                                ->with('student_description_profile',$student_description_view);
        
                    return view('layout')
                            ->with('student_edit',$manage_student);
    }

    public function updatestudent(Request $request,$Student_id){

        $data=array();
        $data['Student_name']=$request->Student_name;
        $data['Student_roll']=$request->Student_roll;
        $data['Student_fathersname']=$request->Student_fathersname;
        $data['Student_mothersname']=$request->Student_mothersname;
        $data['Student_email']=$request->Student_email;
        $data['Student_phone']=$request->Student_phone;
        $data['Student_address']=$request->Student_address;
        $data['Student_admissionyear']=$request->Student_admissionyear;
        $data['Student_password']=$request->Student_password;
       
        DB::table('Student')
                ->where('Student_id',$Student_id)
                ->update($data);

          Session::put('exception','Student update successfuly');
          return Redirect::to('/allstudent');
           // print_r($Student_id);
    }
        

}
