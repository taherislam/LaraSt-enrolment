@extends('layout')
@php 
	function convert_department($value){
				$values=[
					1=>'CSE',	
					2=>'EEE',	
					3=>'ECE',	
					4=>'BBA',	
					5=>'MBA',	
				];
			return $values[$value];	
	}

@endphp

@section('content')

<div class="row user-profile">
	<div class="col-lg-12 side-left">
	  <div class="card mb-6">
	    <div class="card-body avatar">
	      <h2 class="card-title" style="color: #0e900b; font-family: Lucida Calligraphy" >Student Information</h2>
	      <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
	      <p class="name">Name: {{$student_description_profile->student_name}}</p>
	      <p class="designation">Roll: {{$student_description_profile->student_roll}} </p>
	      <a class="email" href="#">E-mail: {{$student_description_profile->student_email}}</a>
	      <a class="number" href="#">Phone: {{$student_description_profile->student_phone}}</a>
	    </div>
	  </div>
	  <div class="card mb-4">
	    <div class="card-body overview">
	     <h1 style="color: #e68120; font-family: Lucida Calligraphy" >Institute Of Science And Technology</h1>
	      <div class="wrapper about-user">
	        <h2 class="card-title mt-4 mb-3">About</h2>
	        <p>The Total Information of this student are give below.</p>
	      </div>
	      <div class="info-links">
	        <a class="website">
	          <i class="icon-globe icon">Fathers Name:</i>
	           <span style="font-size: 15px; font-family: verdana">{{$student_description_profile->student_fathername}}</span>
	        </a>
	        <a class="website">
	          <i class="icon-globe icon">Mothers Name:</i>
	          <span style="font-size: 15px; font-family: verdana">{{$student_description_profile->student_mothername}}</span>
	        </a>
	        <a class="website">
	          <i class="icon-globe icon">Department:</i>
	           <span style="font-size: 15px; font-family: verdana">{{convert_department($student_description_profile->student_department)}}</span>
	        </a>
	        <a class="website">
	          <i class="icon-globe icon">Address:</i>
	           <span style="font-size: 15px; font-family: verdana">{{$student_description_profile->student_address}}</span>
	        </a>
	        <a class="website">
	          <i class="icon-globe icon">Admission year:</i>
	          <span style="font-size: 15px; font-family: verdana">{{$student_description_profile->student_admissionyear}}</span>
	        </a>
	      </div>
	    </div>
	  </div>
	</div>
</div>


@endsection