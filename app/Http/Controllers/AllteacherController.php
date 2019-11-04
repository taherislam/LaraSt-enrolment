<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AllteacherController extends Controller
{
     public function allteacher(){
    	$all_teacher=DB::table('teacher_tbl')
    				->get();

    	$manage_teacher=view('admin.allteacher')
    				->with('all_teacher_info', $all_teacher);

    	return view('layout')
    				->with('allteacher', $manage_teacher);	

    	// return view('admin.allteacher');
    }

    //Delete student method are here ........................
    public function deleteteacher($teacher_id){
    	DB::table('teacher_tbl')
    			->where('teacher_id', $teacher_id)
    			->delete();
    	return Redirect::to('/allteacher');		
    }


}
