@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Teacher</h2>
              <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  } 
                ?>
              </p>
              <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}} " enctype="multipart/form-data">
              	{{csrf_field() }}
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Teacher Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp2" placeholder="Enter Teacher name">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Teacher Phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="teacher_phone" aria-describedby="emailHelp2" placeholder="Enter Teacher Phone">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Teacher Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="teacher_address" aria-describedby="emailHelp2" placeholder="Enter Teacher Address">
                      </div>
                  </div>
                 <div class="form-group">
                      <label>Upload file</label>
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                          <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Teaher Department</label>
                     <select name="teacher_department" id="" class="form-control p-input">
                      <option value="selsect">Please Select Department</option>
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