<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Category;

class CourseController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
   		return view('Admin/createCourse');
   }

   public function form(){
      $category = Category::all();
      return view('Admin/createCourse', compact('category'));
   }

    public function create(Request $request)
    {   
        $dados = $request->all();

        $str = $dados['price'];
        $str = str_replace('.', '', $str);
        $dados['price'] =  str_replace(',', '.', $str); // troca a vírgula por ponto

        Course::create($dados);
         return redirect('admin/course/view');

    }

   public function allcourse(){

   		return view('Admin/course', compact('curso'));

   }
   
   public function view(){

   		$cursos = Course::orderBy('title','ASC')->paginate(5);
      //$cursos = Course::all();
      $curso = Course::all();
      $id = $curso[0]->category;
      return view('Admin/course', compact('cursos','curso','id'));

   }

   public function update($id){

      $curso = Course::find($id);
      $category = $curso->category;
      $categories = Category::all();
      $nomeCategory = Category::where('id', $category)->get();
      $nome = $nomeCategory;

      return view('Admin/updateCourse', compact('curso','categories','category','nome'));

   }

   public function update_data(Request $req, $id){
      
      $curso = $req->all();

      $str = $curso['price'];
      $str = str_replace('.', '', $str); 
      $curso['price'] =  str_replace(',', '.', $str);

      Course::find($id)->update($curso);
      
      return redirect('admin/course/view');

   }

   public function delete($id){

   		$course = Course::find($id);
   		$course->delete();
   		
      return redirect('admin/course/view');

   }

}
