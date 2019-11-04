@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Student</h2>
              <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  } 
                ?>
              </p>
              <form class="forms-sample" method="post" action="{{URL::to('/save_student')}} " enctype="multipart/form-data">
              	{{csrf_field() }}
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp2" placeholder="Enter Student name">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Roll</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp2" placeholder="Enter Student Roll">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Father's name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp2" placeholder="Enter Father's name">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Mother's name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp2" placeholder="Enter Student Mother's name">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp2" placeholder="Enter Student email">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp2" placeholder="Enter Student phone">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp2" placeholder="Enter Student address">
                      </div>
                  </div>
                  
                 <div class="form-group">
                      <label>Upload file</label>
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                          <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp2" placeholder="Enter Student password">
                      </div>
                  </div>
                   <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label"> Addmiossion year</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp2" placeholder="Addmiossion Year">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Department</label>
                     <select name="student_department" id="" class="form-control p-input">
                     	<option value="1">CSE</option>
                     	<option value="2">EEE</option>
                     	<option value="3">ECE</option>
                     	<option value="4">BBA</option>
                     	<option value="5">MBA</option>
                     </select>
                  </div>
                  
                  <button type="submit" class="btn btn-success btn-block">Submit</button>
              </form>
          </div>
      </div>
  </div>

@endsection