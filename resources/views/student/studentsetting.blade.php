@extends('studentlayout')

@section('content')
<div class="col-12 col-lg-6 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Update Your Profile</h2>
              <p class="alert-success"><?php
                  $exception=Session::get('message');
                  if($exception){
                    echo $exception;
                    Session::put('message',null);
                  } 
                ?>
              </p>
              <form class="forms-sample" method="post" action="{{URL::to('/update_onw_student')}}" >
              	{{csrf_field() }}
                 
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control p-input" name="student_email" value="{{($student_description_profile->student_email)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_phone" value="{{($student_description_profile->student_phone)}}" >
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_address" value="{{($student_description_profile->student_address)}}">
                      </div>
                  </div>
                 
                   <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label"> Change Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control p-input" name="student_password"value="{{($student_description_profile->student_password)}}">
                      </div>
                  </div> 
                  <button type="submit" class="btn btn-success btn-block">Update</button>
              </form>
          </div>
      </div>
  </div>

@endsection