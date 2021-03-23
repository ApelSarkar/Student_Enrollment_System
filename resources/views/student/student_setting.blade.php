@extends('student_layout')
@section('content')

              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"><b>Update Your Profile</b></h2>
                          <p class="alert-success">
                              <?php
                              $exception=Session::get('exception');
                              if($exception){
                              echo $exception;
                              Session::put('exception',null);
                              }

                              ?>
                              </p>
                              
                              
                          <form class="forms-sample" method="post" action="{{ URL::to('/student_own_update')}}" >

                          {{ csrf_field() }}

                             

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student name</label>
                                  <input type="text" class="form-control p-input" name="Student_name" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_name}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student address</label>
                                  <input type="text" class="form-control p-input" name="Student_address" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_address}}">
                                  
                            </div>

                           





                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="Student_password"
                                  value="{{$student_description_profile->Student_password}}">
                              </div>


                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection