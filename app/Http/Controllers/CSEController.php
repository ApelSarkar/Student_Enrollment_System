<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEController extends Controller
{

    
    public function cse(){
        $csestudent_info=DB::table('student')
                        ->where(['Student_department'=>1])
                        ->get();

        
                        $manage_student=view('admin.cse')->with('csestudent_info',$csestudent_info);

                        return view('layout')->with('csestudent_info',$manage_student);
    }
}
