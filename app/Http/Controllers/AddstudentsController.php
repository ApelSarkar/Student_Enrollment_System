<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Session;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentsController extends Controller
{
   
    
    public function addstudent(){
        return view('admin.addstudent');
    }

    public function savestudent(Request $request){
      $data=array();
        $data['Student_name']=$request->Student_name;
        $data['Student_roll']=$request->Student_roll;
        $data['Student_fathersname']=$request->Student_fathersname;
        $data['Student_mothersname']=$request->Student_mothersname;
        $data['Student_email']=$request->Student_email;
        $data['Student_phone']=$request->Student_phone;
        $data['Student_address']=$request->Student_address;
        $data['Student_password']=md5($request->Student_password);
        $data['Student_admissionyear']=$request->Student_admissionyear;
        $data['Student_department']=$request->Student_department;
        
        $image = $request->file('Student_image');

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['Student_image'] = $image_url;

                DB::table('student')->insert($data);
                Session::put('exception','Student added successfully!!');
                return Redirect::to('/addstudent');

            }


        }

        $data['image'] = $image_url;
        DB::table('student')->insert($data);
        Session::put('exception','Student added successfully!!');
        return Redirect::to('/addstudent');

        DB::table('student')->insert($data);
        Session::put('exception','Student added successfully!!');
        return Redirect::to('/addstudent');



    }
  

    public function studentprofile(){
        $student_id=Session::get('Student_id');
        $student_profile=DB::table('student')
                                ->select('*')
                                ->where('Student_id',$student_id)
                                ->first();



        //print_r( $student_profile);

        $manage_student=view('student.student_view')
                        ->with('student_profile',$student_profile);

            return view('student_layout')
                    ->with('student_view',$manage_student);
    }


    public function studentlogout(){
        Session::put('Student_name',null);
        Session::put('Student_id',null);
  
        return Redirect::to('/');
  
    }
    public function studentsetting(){
        $student_id=Session::get('Student_id');
        $student_description_view=DB::table('student')
                                ->select('*')
                                ->where('Student_id',$student_id)
                                ->first();

        
                                $manage_student=view('student.student_setting')
                                ->with('student_description_profile',$student_description_view);
        
                    return view('student_layout')
                            ->with('student_setting',$manage_student);
    }



}
