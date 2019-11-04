<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AllstudentController extends Controller
{
     public function allstudent(){
    	$all_student=DB::table('student_tbl')
    				->get();

    	$manage_student=view('admin.allstudent')
    				->with('all_student_info', $all_student);

    	return view('layout')
    				->with('allstudent', $manage_student);			

    	//return view('admin.allstudent');
    }
//Delete student method are here ........................
    public function deletestudent($student_id){
    	DB::table('student_tbl')
    			->where('student_id', $student_id)
    			->delete();
    	return Redirect::to('/allstudent');		
    }

    //View Student all information are here....................
    public function viewstudent($student_id){
        $student_description_view=DB::table('student_tbl')
                                  ->select('*')
                                  ->where('student_id', $student_id)
                                  ->first();
              // echo "<pre>";
              // print_r($student_description_view);          
              // echo "</pre>";   

          $manage_description_student_view=view('admin.studentview')
                                    ->with('student_description_profile', $student_description_view);
                        return view('layout')
                                    ->with('studentview', $manage_description_student_view);        

        // return view ('admin.studentview');
    }

    //student edit part are here...............................
          public function studentedit($student_id){
        $student_description_edit=DB::table('student_tbl')
                                  ->select('*')
                                  ->where('student_id', $student_id)
                                  ->first();
              // echo "<pre>";
              // print_r($student_description_edit);          
              // echo "</pre>";   

          $manage_description_student=view('admin.studentedit')
                                    ->with('student_description_profile', $student_description_edit);
                        return view('layout')
                                    ->with('studentedit', $manage_description_student);     

        // return view('admin.studentedit');
   
    }


    //Update Student part are here...............................
    public function studentupdate(Request $request, $student_id){
        // echo "</pre>";
        // print_r($student_id);

                  $data=array();
                  $data['student_name']=$request->student_name;  
                  $data['student_roll']=$request->student_roll;  
                  $data['student_fathername']=$request->student_fathername;  
                  $data['student_mothername']=$request->student_mothername;  
                  $data['student_email']=$request->student_email;  
                  $data['student_phone']=$request->student_phone;  
                  $data['student_address']=$request->student_address;  
                  $data['student_password']=$request->student_password;  
                  $data['student_admissionyear']=$request->student_admissionyear;  

            DB::table('student_tbl')
                      ->where('student_id', $student_id)
                      ->update($data); 

            Session::put('message', 'Student update Successffully');
                      return Redirect::to('/allstudent') ;             
    }

    //Update Own Student part are here.................................
     public function studentonwupdate(Request $request){
          // echo "</pre>";
          // print_r($student_id);
                  $student_id=Session::get('student_id');  
                  $data=array();  
                  $data['student_email']=$request->student_email;  
                  $data['student_phone']=$request->student_phone;  
                  $data['student_address']=$request->student_address;  
                  $data['student_password']=$request->student_password;  

            DB::table('student_tbl')
                      ->where('student_id', $student_id)
                      ->update($data); 

            Session::put('message', 'Student update Successffully');
                      return Redirect::to('/student_setting') ;             
    }


}
