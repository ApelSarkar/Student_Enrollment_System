<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{


    public function admindashboard(){
      return view('admin.dashboard');
    }
      //studentsetting
    public function studentsetting(){
      return view('student.student_setting');
    }


    //student login part here

    public function student_dashboard(){
      return view('student.dashboard');
    }

    public function logout(){
      Session::put('admin_name',null);
      Session::put('admin_id',null);

      return Redirect::to('/backend');

    }

    public function login_dashboard(Request $request)
    {
      //return view('admin.dashboard');

      $email=$request->admin_email;
      $password=md5($request->admin_password);
      $result=DB::table('admin')
      ->where('admin_email',$email)
      ->where('admin_password',$password)
      ->first();

      

      if($result){
        Session::put('admin_email',$result->admin_email);
        Session::put('admin_id',$result->admin_id);

       return Redirect::to('/admin_dashboard');

       //echo "Welcome";
      }

      else{
        Session::put('exception','Email or Password Invalid');
        return Redirect::to('/backend');
      }



    }


    public function student_login_dashboard(Request $request)
    {
      //return view('admin.dashboard');

      $email=$request->Student_email;
      $password=md5($request->Student_password);
      $result=DB::table('student')
      ->where('Student_email',$email)
      ->where('Student_password',$password)
      ->first();

      

      if($result){
        Session::put('Student_email',$result->Student_email);
        Session::put('Student_id',$result->Student_id);

       return Redirect::to('/student_dashboard');

       //echo "Welcome";
      }

      else{
        Session::put('exception','Email or Password Invalid');
        return Redirect::to('/');
      }



    }





}
