@extends('studentlayout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Student</h2>
        @php
            $all_student=DB::table('student_tbl')
                        ->count('student_id');
        @endphp

        <p style="font-family: Monotype Corsiva; font-weight: bold; font-size: 30px; text-align: center;">{{$all_student}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>
       @php
            $all_teacher=DB::table('teacher_tbl')
                        ->count('teacher_id');
        @endphp
       <p style="font-family: Monotype Corsiva; font-weight: bold; font-size: 30px; text-align: center;">{{$all_teacher}}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tutions Fee</h2>
       <p style="font-family: Monotype Corsiva; font-weight: bold; font-size: 30px; text-align: center;">monthly:3500Tk</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
      <p style="font-family: Monotype Corsiva; font-weight: bold; font-size: 30px; text-align: center;">Revenue</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>


@endsection
