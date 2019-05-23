<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Course;
use App\Category;

class apiController extends Controller
{
    public function users(){

      $users = User::all();
      return json_encode($users);

    }

    public function course(){

      $course = Course::all();
      return json_encode($course);

    }

    public function category(){

      $category = Category::all();
      return json_encode($category);
      
    }
}
