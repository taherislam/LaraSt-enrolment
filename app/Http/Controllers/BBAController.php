<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BBAController extends Controller
{
     public function bba(){
    	$bba_allstudent=DB::table('student_tbl')
    					->where(['student_department'=>4])
    					->get();

    	$manage_student=view('admin.bba')
    					->with('bba_student_info', $bba_allstudent);
    	return view('layout')
    					->with('bba', $manage_student);	
    	// return view('admin.bba');
    }
}
