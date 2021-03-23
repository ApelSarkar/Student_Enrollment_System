<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ECEController extends Controller
{
    public function ece(){
        $ecestudent_info=DB::table('student')
        ->where(['Student_department'=>4])
        ->get();


        $manage_student=view('admin.ece')->with('ecestudent_info',$ecestudent_info);

        return view('layout')->with('ecestudent_info',$manage_student);
    }
}

