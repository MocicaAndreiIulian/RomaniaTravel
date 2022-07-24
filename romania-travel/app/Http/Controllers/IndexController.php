<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
  use App\Models\Category;
    use App\Models\User;
      use App\Models\Gallery;
use Illuminate\Http\Request;


class IndexController extends Controller
{
  public function indexContent() {

    $statistics['users'] = DB::table('users')->count();
    $statistics['articles'] = DB::table('articles')->where('status','=','1')->count();
    $statistics['locations'] = DB::table('locations')->where('approve','=','1')->count();
    $statistics['answers'] = DB::table('location_answers')->where('approve','=','1')->count();
    $statistics['questions'] = DB::table('location_questions')->where('approve','=','1')->count();
        $galleries =Gallery::all();
     $articles = DB::table('articles')
     ->join('categories','articles.categoryId', '=','categories.id')
      ->join('users','articles.authorId', '=','users.id')
     ->select('articles.*','users.name AS userName', 'categories.name as categoryName')->orderBy('id','desc')->take(3)->get();
     $locations = DB::table('locations')
      ->join('users','locations.userId', '=','users.id')
     ->select('locations.*','users.name AS userName')->orderBy('id','desc')->orderBy('id','desc')->take(2)->get();
 $users =User::take(4)->orderBy('scores','desc')->get();
   return view('welcome',['articles'=>$articles, 'statistics' => $statistics, 'users'=>$users, 'locations'=>$locations, 'galleries'=>$galleries]);
 }
}
