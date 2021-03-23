@extends('layout')
@section('content')

              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"><b>Add Student</b></h2>
                          <p class="alert-success">
                              <?php
                              $exception=Session::get('exception');
                              if($exception){
                              echo $exception;
                              Session::put('exception',null);
                              }

                              ?>
                              </p>
                              
                              
                          <form class="forms-sample" method="post" action="{{ URL::to('/save_student')}}" enctype="multipart/form-data">

                          {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="Student_name" aria-describedby="emailHelp" placeholder="Enter Student name">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="Student_roll" aria-describedby="emailHelp" placeholder="Enter Student roll">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Fathers name</label>
                                  <input type="text" class="form-control p-input" name="Student_fathersname" aria-describedby="emailHelp" placeholder="Enter Student father Name">
                                  
                            </div>


                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mothers Name</label>
                                  <input type="text" class="form-control p-input" name="Student_mothersname" aria-describedby="emailHelp" placeholder="Enter Student mothers name">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="Student_email" aria-describedby="emailHelp" placeholder="Enter Student email">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student phone</label>
                                  <input type="text" class="form-control p-input" name="Student_phone" aria-describedby="emailHelp" placeholder="Enter Student phone">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student address</label>
                                  <input type="text" class="form-control p-input" name="Student_address" aria-describedby="emailHelp" placeholder="Enter Student address">
                                  
                            </div>






                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="Student_password" placeholder="Password">
                              </div>


<!--                          
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                                      <input type="file" class="form-control-file" name="Student_image" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div> -->

                              <div class="form-group">
                              <div class="row">
                                    <div class="col-12">
                                    <label for="imageInput">Image</label>
                                    <input data-preview="#preview" name="Student_image" type="file" id="imageInput">
                                    <img class="col-sm-6" id="preview" >
                                   
                                    </div>
                               </div>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInput Email1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="Student_admissionyear" aria-describedby="emailHelp" placeholder="Enter Student Admission Year">
                                  
                            </div>

                              

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                  <select class="form-control p-input" name="Student_department">
                                  <option value="1">CSE</option>
                                  <option value="2">BBA</option>
                                  <option value="3">EEE</option>
                                  <option value="4">ECE</option>
                                  <option value="5">MBA</option>
                                  </select>
                            </div>

                           

                            



                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection