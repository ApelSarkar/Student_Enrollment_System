@extends('layout')
@section('content')

              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"><b>Add Teacher</b></h2>
                          <p class="alert-success">
                              <?php
                              $exception=Session::get('exception');
                              if($exception){
                              echo $exception;
                              Session::put('exception',null);
                              }

                              ?>
                              </p>
                              
                              
                          <form class="forms-sample" method="post" action="{{ URL::to('/save_teacher')}}" enctype="multipart/form-data">

                          {{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teachers Name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter teacher name">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Teachers phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" placeholder="Enter teacher phone">
                                  
                            </div>

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Teachers address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp" placeholder="Enter Teacher address">
                                  
                            </div>

                            
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Teachers Department</label>
                                  <select class="form-control p-input" name="teachers_department">
                                  <option value="1">CSE</option>
                                  <option value="2">BBA</option>
                                  <option value="3">EEE</option>
                                  <option value="4">ECE</option>
                                  <option value="5">MBA</option>
                                  </select>
                            </div>
                          
                              <div class="form-group">
                              <div class="row">
                                    <div class="col-12">
                                    <label for="imageInput">Image</label>
                                    <input data-preview="#preview" name="teachers_image" type="file" id="imageInput">
                                    <img class="col-sm-6" id="preview" >
                                   
                                    </div>
                               </div>
                              </div>

                        
                              <button type="submit" class="btn btn-success btn-block">Add Teachers</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection