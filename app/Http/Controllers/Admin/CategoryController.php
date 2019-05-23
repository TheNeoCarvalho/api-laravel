<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('Admin/category', compact('categories'));
    }

    public function form(){
    	return view('Admin/createCategory');
    }

    public function create(Request $req){

    	$dados = $req->all();
    	Category::create($dados);
        return redirect('admin/category/view');

    }

    public function update($id){

      $category = Category::find($id);
      return view('Admin/updateCategory', compact('category'));

   }

   public function view(){
      $categories = Category::all();
      return view('Admin/category', compact('categories'));
   }

   public function update_data(Request $req, $id){
      $category = $req->all();
      Category::find($id)->update($category);
      return redirect('admin/category/view');

   }

   public function delete($id){

   		$category = Category::find($id);
   		$category->delete();
   		return redirect('admin/category/view');

   }
}
