<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MBAController extends Controller
{
    public function mba(){
    	$mba_allstudent=DB::table('student_tbl')
    					->where(['student_department'=>5])
    					->get();

    	$manage_student=view('admin.mba')
    					->with('cse_student_info', $mba_allstudent);
    	return view('layout')
    					->with('mba', $manage_student);
    	// return view('admin.mba');
    }
}
