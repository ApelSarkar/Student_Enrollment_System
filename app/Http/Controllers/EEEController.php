<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEController extends Controller
{
    public function eee(){
        $eeestudent_info=DB::table('student')
        ->where(['Student_department'=>3])
        ->get();


        $manage_student=view('admin.eee')->with('eeestudent_info',$eeestudent_info);

        return view('layout')->with('eeestudent_info',$manage_student);
    }
}

