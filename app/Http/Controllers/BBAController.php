<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{

   
    public function bba(){
        $bbastudent_info=DB::table('student')
        ->where(['Student_department'=>2])
        ->get();


        $manage_student=view('admin.bba')->with('bbastudent_info',$bbastudent_info);

        return view('layout')->with('bbastudent_info',$manage_student);
    }
}

