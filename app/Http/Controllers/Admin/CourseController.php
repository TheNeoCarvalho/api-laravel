<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

	public function index(){

   		return view('createCourse');

   }
   
   public function create(Request $req){

   	

   }
}
