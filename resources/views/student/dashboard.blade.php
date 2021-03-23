@extends('student_layout');
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Students</h2>
                  @php
                  $student=DB::table('student')
                          ->count('Student_id');
                  @endphp
                  <P style="font-family:cursive; font-size:30px; font-weight:bold; text-align:center">{{$student}}</P>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Teachers</h2>
                  @php
                  $teacher=DB::table('teachers')
                          ->count('teachers_id');
                  @endphp
                  <P style="font-family:cursive; font-size:30px; font-weight:bold; text-align:center">{{$teacher}}</P>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tuition</h2>
                  <P style="font-family:cursive; font-size:20px; font-weight:bold; text-align:center">Monthly:2500</P>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Salary</h2>
                  <P style="font-family:cursive; font-size:20px; font-weight:bold; text-align:center">Monthly:500$</P>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>

         
           
           
        
@endsection