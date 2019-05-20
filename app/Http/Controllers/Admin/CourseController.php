<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\User;

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
      return view('Admin/createCourse');
   }

    public function create(Request $request)
    {   
        $dados = $request->all();

        $str = $dados['price'];
        $str = str_replace('.', '', $str); // remove o ponto
        $dados['price'] =  str_replace(',', '.', $str); // troca a vírgula por ponto

        Course::create($dados);
         return redirect('admin/course/view');

    }

   public function allcourse(){
      $curso = Course::all();
      
   		return view('Admin/course');
   }
   
   public function view(){
   		$cursos = Course::all();
      $users = User::all();
      $userCount = $users->count('id');
      $count = $cursos->count('ch');
      $soma = $this->moeda($cursos->sum('price'));
      $avg = $this->moeda($cursos->avg('price'));
      $max = $this->moeda($cursos->max('price'));
      $min = $this->moeda($cursos->min('price'));

        return view('Admin/course', compact('cursos',
                                            'count',
                                            'soma',
                                            'avg',
                                            'max',
                                            'min',
                                            'userCount'));
   }

   private function moeda($valor){
      return number_format($valor,2,",",".");
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
   		return redirect('admin/course/view');

   }

}
