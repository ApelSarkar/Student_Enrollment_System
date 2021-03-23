@extends('layout')
@section('content')

              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"><b>Update Student</b></h2>
                          <p class="alert-success">
                              <?php
                              $exception=Session::get('exception');
                              if($exception){
                              echo $exception;
                              Session::put('exception',null);
                              }

                              ?>
                              </p>
                              
                              
                          <form class="forms-sample" method="post" 
                              action="{{ URL::to('/update_student',$student_description_profile->Student_id)}}" >

                          {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="Student_name" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_name}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="Student_roll" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_roll}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Fathers name</label>
                                  <input type="text" class="form-control p-input" name="Student_fathersname" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_fathersname}}">
                                  
                            </div>


                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mothers Name</label>
                                  <input type="text" class="form-control p-input" name="Student_mothersname" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_mothersname}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="Student_email" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_email}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone</label>
                                  <input type="text" class="form-control p-input" name="Student_phone" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_phone}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student address</label>
                                  <input type="text" class="form-control p-input" name="Student_address" aria-describedby="emailHelp" 
                                  value="{{$student_description_profile->Student_address}}">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInput Email1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="Student_admissionyear" aria-describedby="emailHelp" value="{{$student_description_profile->Student_admissionyear}}">
                                  
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