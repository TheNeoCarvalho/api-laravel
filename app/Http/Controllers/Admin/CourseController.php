<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{

	public function index(){
   		return view('Admin/createCourse');
   }

   public function form(){
      return view('Admin/createCourse');
   }

    public function create(Request $request)
    {   
        $dados = $request->all();
        Course::create($dados);
         return redirect('Admin/course/view');

    }

   public function allcourse(){
   		return view('Admin/course');
   }
   
   public function view(){
   		$cursos = Course::all();
        return view('Admin/course', compact('cursos'));
   }

   public function update($id){

      //$curso = Course::where('id', $id)->get();
      $curso = Course::find($id);
      //return redirect()->route('update');
      return view('Admin/updateCourse', compact('curso'));

   }

   public function update_data(Request $req, $id){
      $curso = $req->all();

      $str = $curso['price'];
      $str = str_replace('.', '', $str); // remove o ponto
      $curso['price'] =  str_replace(',', '.', $str); // troca a vírgula por ponto

      Course::find($id)->update($curso);
      return redirect('admin/course/view');

   }

   public function delete($id){

   		$course = Course::find($id);
   		$course->delete();
   		return redirect('Admin/course/view');

   }

}
