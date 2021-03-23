@extends('student_layout')


@php
function covert_department($value){

$values=[
    1=>'CSE',
    2=>'BBA',
    3=>'EEE',
    4=>'ECE',
    5=>'MBA',

];

return $values[$value];

}





@endphp


@section('content')


<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  
                  <img src="{{URL::to($student_profile->Student_image)}}" alt="" >
                
                  <p class="name">{{strtoupper($student_profile->Student_name)}}</p>
                  <p class="designation">{{covert_department($student_profile->Student_department)}}</p>
                  <a class="email" href="#">{{$student_profile->Student_email}}</a>
                  <a class="number" href="#">{{$student_profile->Student_roll}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <h2 style="color: maroon; font-family:cursive; font-weight:bolder;">Daffodil Internationl University</h2>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p><b>The total information of this student given below</b></p>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Father Name:</i>
                      <span style="font-family:vernada; font-size:15px;">{{$student_profile->Student_fathersname}}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon">Mother Name:</i>
                      <span style="font-family:vernada; font-size:15px;">{{$student_profile->Student_mothersname}}</span>
                    </a>
                   
                    <a class="website" >
                      <i class="icon-globe icon">Phone:</i>
                      <span style="font-family:vernada; font-size:15px;">{{$student_profile->Student_phone}}</span>
                    </a>



                    <a class="website" >
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family:vernada; font-size:15px;">{{$student_profile->Student_address}}</span>
                    </a>


                    <a class="website" >
                      <i class="icon-globe icon">Admission Year:</i>
                      <span style="font-family:vernada; font-size:15px;">{{$student_profile->Student_admissionyear}}</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            </div> 


@endsection