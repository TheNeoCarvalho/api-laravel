<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{

	public function index(){

   		return view('createCourse');

   }

   public function allcourse(){
   		return view('Admin/course');
   }
   
   public function view(){
   		$cursos = Course::all();
        return view('Admin/course', compact('cursos'));
   }

   public function create(Request $req){

   }

   public function delete($id){

   		$course = Course::find($id);
   		$course->delete();
   		return redirect('admin/course/view');

   }

}
