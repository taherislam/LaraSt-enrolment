<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ECEController extends Controller
{
    public function ece(){
    	$ece_allstudent=DB::table('student_tbl')
    					->where(['student_department'=>3])
    					->get();

    	$manage_student=view('admin.ece')
    					->with('ece_student_info', $ece_allstudent);
    	return view('layout')
    					->with('ece', $manage_student);
    	// return view('admin.ece');
    }
}
