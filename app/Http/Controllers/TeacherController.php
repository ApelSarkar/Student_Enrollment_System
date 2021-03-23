<?php

namespace App\Http\Controllers;
use APP\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class TeacherController extends Controller
{
    public function teacher(){
        return view('admin.teacher');
    }

    public function addteacher(){
        return view('admin.addteacher');
    }
    public function saveteacher(Request $request){
        $data=array();
        $data['teachers_name']=$request->teachers_name;
        $data['teachers_phone']=$request->teachers_phone;
        $data['teachers_address']=$request->teachers_address;
        $data['teachers_department']=$request->teachers_department;
        
        
        $image = $request->file('teachers_image');

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['teachers_image'] = $image_url;

                DB::table('teachers')->insert($data);
                Session::put('exception','Teachers added successfully!!');
                return Redirect::to('/addteacher');

            }


        }

        $data['image'] = $image_url;
        DB::table('teachers')->insert($data);
        Session::put('exception','Teachers added successfully!!');
        return Redirect::to('/addteacher');

        DB::table('teachers')->insert($data);
        Session::put('exception','Teachers added successfully!!');
        return Redirect::to('/addteacher');
    }

    public function allteacher(){

        $allteacher_info=DB::table('teachers')->get();

        $manage_teacher=view('admin.allteacher')->with('allteacher_info',$allteacher_info);

        return view('layout')->with('allteacher',$manage_teacher);

       
    }

    public function teacherdelete($teachers_id){
        DB::table('teachers')
        ->where('teachers_id',$teachers_id)
        ->delete();

        return redirect::to('/allteacher');
     
    }
}

