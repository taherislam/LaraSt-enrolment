@extends('layout')

@section('content')
<div class="col-12 col-lg-6 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title"> Student Update</h2>
              <form class="forms-sample" method="post" action="{{URL::to('/update_student', $student_description_profile->student_id)}} " >
              	{{csrf_field() }}
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp2" value="{{($student_description_profile->student_name)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Roll</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp2" value="{{($student_description_profile->student_roll)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Father's name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp2" value="{{($student_description_profile->student_fathername)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Mother's name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp2" value="{{($student_description_profile->student_mothername)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp2" value="{{($student_description_profile->student_email)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp2" value="{{($student_description_profile->student_phone)}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp2" value="{{($student_description_profile->student_address)}}">
                      </div>
                  </div>
                   <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control p-input" name="student_address" aria-describedby="emailHelp2" value="{{($student_description_profile->student_password)}}">
                      </div>
                  </div>
                 
                   <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-4 col-form-label"> Addmiossion year</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp2" value="{{($student_description_profile->student_admissionyear)}}">
                      </div>
                  </div> 
                  <button type="submit" class="btn btn-success btn-block">Update</button>
              </form>
          </div>
      </div>
  </div>

@endsection