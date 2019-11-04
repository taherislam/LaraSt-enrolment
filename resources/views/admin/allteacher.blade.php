@extends('layout')
@section('content')
<div class="card col-12">
<div class="card-body">
  <h2 class="card-title">Teacher All Information</h2>
   <p class="alert-success"><?php
                  $exception=Session::get('message');
                  if($exception){
                    echo $exception;
                    Session::put('message',null);
                  } 
                ?>
              </p>
  <div class="row">
    <div class="col-12">
      <table id="order-listing" class="table table-striped" style="width:100%;">
        <thead>
          <tr>
              <th>Teacher Name</th>
              <th>Phone</th>
              <th>Image</th>
              <th>Address</th>
              <th>Department</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_teacher_info as $v_teacher)
          <tr>
              <td>{{$v_teacher->teacher_name}} </td>
              <td>{{$v_teacher->teacher_phone}} </td>
              <td> <img src="{{URL::to($v_teacher->teacher_image)}}" alt="myimage" style="height: 80px; width: 100px; border-radius: 50%"></td>
              <td>{{$v_teacher->teacher_address}} </td>
              <td>
                @if($v_teacher->teacher_department== 1)
                  <span class="label label-success">{{'CSE'}}</span>
                  @elseif($v_teacher->teacher_department== 2)
                  <span class="label label-primary">{{'EEE'}}</span>
                  @elseif($v_teacher->teacher_department== 3)
                  <span class="label label-primary">{{'ECE'}}</span>
                  @elseif($v_teacher->teacher_department== 4)
                  <span class="label label-primary">{{'BBA'}}</span>
                  @elseif($v_teacher->teacher_department== 5)
                  <span class="label label-primary">{{'MBA'}}</span>
                  @else
                  <span class="label label-important">{{'not defined!'}}</span>
                @endif
              <td>
               
               <a href="{{URL::to('/edit_teacher/'.$v_teacher->teacher_id)}} "> <button class="btn btn-outline-success">Edit</button></a>

                <a href="{{ URL::to('/delete_teacher/'.$v_teacher->teacher_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection