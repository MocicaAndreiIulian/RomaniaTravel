<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {

   $userSession = Auth::user()->id;
      $userPicture = Auth::user()->picture;
         $userSessionEmail = Auth::user()->email;

   $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
   $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
    $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
    $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
       $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
       $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
       $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();


       $statistics['Articles'] = DB::table('articles')->count();
         $statistics['Answers'] = DB::table('location_answers')->count();
         $statistics['Questions'] = DB::table('location_questions')->count();
           $statistics['Locations'] = DB::table('locations')->count();
           $statistics['Comments'] = DB::table('comments')->count();
           $statistics['Opinions'] = DB::table('opinions')->count();
           $statistics['Users'] = DB::table('users')->count();
          $statistics['Messages'] = DB::table('messages')->count();
          $statistics['Resetpasses'] = DB::table('reset_passes')->count();
     return view('home', ['statistics'=>$statistics, 'userPicture' => $userPicture  ]);
     }


public function myArticles()
{
  $userSession = Auth::user()->id;
     $userPicture = Auth::user()->picture;
        $userSessionEmail = Auth::user()->email;

  $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
  $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
   $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
   $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
      $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
      $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
      $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();
      $myArticles = DB::table('articles')
     ->join('categories','articles.categoryId', '=','categories.id')
        ->join('users','articles.authorId', '=','users.id')
     ->select('articles.*','categories.id AS joinIdCategory', 'categories.name AS joinNameCategory')
     ->where('users.id','=',"$userSession")->orderBy('id','desc')->get();
      return view('articolele-mele', [ 'statistics'=>$statistics, 'userPicture' => $userPicture, 'myArticles' => $myArticles ]);
     }
     public function myPosts()
     {
       $userSession = Auth::user()->id;
          $userPicture = Auth::user()->picture;
             $userSessionEmail = Auth::user()->email;

       $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
       $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
        $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
        $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
           $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
           $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
           $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();
           $myPosts = DB::table('locations')
             ->join('users','locations.userId', '=','users.id')
          ->select('locations.*')
          ->where('users.id','=',"$userSession")->orderBy('id','desc')->get();
           return view('postarile-mele', [ 'statistics'=>$statistics, 'userPicture' => $userPicture, 'myPosts' => $myPosts ]);
          }
          public function myQuestions()
          {
            $userSession = Auth::user()->id;
               $userPicture = Auth::user()->picture;
                  $userSessionEmail = Auth::user()->email;
                  $myQuestions = DB::table('location_questions')
                    ->join('users','location_questions.userId', '=','users.id')
                  ->select('location_questions.*')
                  ->where('users.id','=',"$userSession")->orderBy('id','desc')->get();
            $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
            $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
             $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
             $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
                $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
                $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
                $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();
                return view('intrebarile-mele', [ 'statistics'=>$statistics, 'userPicture' => $userPicture, 'myQuestions' => $myQuestions  ]);
               }


      public function myAccountEdit()
      {
        $userPicture = Auth::user()->picture;
        $userSession = Auth::user()->id;
          $userSessionEmail = Auth::user()->email;
          
          $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
          $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
           $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
           $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
              $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
              $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
              $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();
       return view('editare-cont', [ 'statistics'=>$statistics, 'userPicture' => $userPicture ]);
      }

      public function myAccountEditPass()
      {
        $userPicture = Auth::user()->picture;
        $userSession = Auth::user()->id;
          $userSessionEmail = Auth::user()->email;
          $statistics['myArticles'] = DB::table('articles')->where('authorId', '=', $userSession)->count();
          $statistics['myAnswers'] = DB::table('location_answers')->where('userId', '=', $userSession)->count();
           $statistics['myAnswersTop'] = DB::table('location_answers')->where('userId', '=', $userSession)->where('favorite', '=', '1')->count();
           $statistics['myQuestions'] = DB::table('location_questions')->where('userId', '=', $userSession)->count();
              $statistics['myLocations'] = DB::table('locations')->where('userId', '=', $userSession)->count();
              $statistics['myComments'] = DB::table('comments')->where('userId', '=', $userSession)->count();
              $statistics['myOpinions'] = DB::table('opinions')->where('userId', '=', $userSession)->count();
       return view('editare-pass', [ 'statistics'=>$statistics, 'userPicture' => $userPicture ]);
      }

      public function myAccountUpdate(Request $req)
       {
       //$check =User::all()->where('email','=',$req->email)->where('id', '!=',$req->id);
       //if ($check > 0) {
        // return redirect('/products');
      // }
         $check = User::all()->where('email','=',$req->email)->where('id', '!=',$req->id)->count();
         if($check==0)
         {
           $user=user::find($req->id);
           $user->name = $req->name;
            $user->email = $req->email;
           // $user->password=Hash::make($req->password);
           $user->save();
           return redirect('/home');
         }
         else
         {
            return redirect('/editare-cont')->with('AcelasiEmail', 'Acest email este folosit de un alt utilizator!');
         }
       }

       public function myAccountUpdatePass(Request $req)
       {
       //$check =User::all()->where('email','=',$req->email)->where('id', '!=',$req->id);
       //if ($check > 0) {
        // return redirect('/products');
      // }
          
           $user=user::find($req->id);
           $user->name = $req->name;
            $user->email = $req->email;
            $user->password=Hash::make($req->password);
           $user->save();
           return redirect('/home');
       }


       public function addProfileImage(Request $req)
       {
            $picture=user::find($req->id);
                  //dd($req->hasFile('picture'));
                  if ($req->hasFile('image')) {

                      $file = $req->file('image');
                      $extension = $file->getClientOriginalExtension();
                      $filename = time().'.'.$extension;
                      $directory = "Images/User/";

                      $file->move($directory, $filename) ;
                      $picture->picture = $filename;
                  }
                  $picture->save();
return redirect('/home');
       }

}
