<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CSEController extends Controller
{
     public function cse(){
    	$cse_allstudent=DB::table('student_tbl')
    					->where(['student_department'=>1])
    					->get();

    	$manage_student=view('admin.cse')
    					->with('cse_student_info', $cse_allstudent);
    	return view('layout')
    					->with('cse', $manage_student);								


    	// echo '<pre>';
    	// print_r($cse_allstudent);
    	// echo '</pre>';					

    	//return view('admin.cse');
    }
}
