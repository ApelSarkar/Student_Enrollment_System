<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
    public function mba(){
        $mbastudent_info=DB::table('student')
                        ->where(['Student_department'=>5])
                        ->get();

        
                        $manage_student=view('admin.mba')->with('mbastudent_info',$mbastudent_info);

                        return view('layout')->with('mbastudent_info',$manage_student);
    }
}

