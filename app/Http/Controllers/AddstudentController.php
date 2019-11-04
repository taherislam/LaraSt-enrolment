<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentController extends Controller
{
   public function addstudent(){
   	return view('admin.addstudent');
   }
   //Save student part are here............

   public function savestudent(Request $request){
   		$data=array();
   			$data['student_name']=$request->student_name;
   			$data['student_roll']=$request->student_roll;
   			$data['student_fathername']=$request->student_fathername;
   			$data['student_mothername']=$request->student_mothername;
   			$data['student_email']=$request->student_email;
   			$data['student_phone']=$request->student_phone;
   			$data['student_address']=$request->student_address;
   			$data['student_password']=md5($request->student_password);
   			$data['student_department']=$request->student_department;
   			$data['student_admissionyear']=$request->student_admissionyear;
   			$image=$request->file('student_image');

			if($image){
				$image_name=str_random(20);
				$ext=strtolower($image->getClientOriginalExtension());
				$image_full_name=$image_name.'.'.$ext;
				$upload_path='image/';
				$image_url=$upload_path.$image_full_name;
				$success=$image->move($upload_path,$image_full_name);
				if($success){
					$data['student_image']=$image_url;

					DB::table('student_tbl')->insert($data);
					Session::put('exception', 'Student added successfully!!' );
					return Redirect::to('/addstudent');
				}
			}
			
			$data['image']=$image_url;
			DB::table('student_tbl')->insert($data);
			Session::put('exception', 'Student added successfully!!' );
			return Redirect::to('/addstudent');

			DB::table('student_tbl')->insert($data);
			Session::put('exception', 'Student added successfully!!' );
			return Redirect::to('/addstudent');

   }

	//View profile part.............................
		 public function studentviewprofile(){
		 	$student_id=Session::get('student_id');
		    $student_description_view=DB::table('student_tbl')
                                  ->select('*')
                                  ->where('student_id', $student_id)
                                  ->first();
              // echo "<pre>";
              // print_r($student_description_view);          
              // echo "</pre>";   

          $manage_description_student_view=view('student.student_view')
                                    ->with('student_description_profile', $student_description_view);
                        return view('studentlayout')
                                    ->with('student_view', $manage_description_student_view); 
		    return view('student.student_view');
		 }  

	



}

