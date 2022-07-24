<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  use App\Models\Category;
    use App\Models\Article;
    use Auth;
    use App\Models\User;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function newArticle()

{
$categories =Category::all();
$users =User::all();
  return view('new-article',['categories'=>$categories, 'users'=>$users ]);

}


public function newUserArticle()

{
$categories =Category::all();
  return view('adauga-articol',['categories'=>$categories ]);

}

    public function index()
    {

            $categories =Category::all();
           $articles = DB::table('articles')
           ->join('categories','articles.categoryId', '=','categories.id')
            ->join('users','articles.authorId', '=','users.id')
           ->select('articles.*','users.name AS userName', 'categories.name as categoryName')->orderBy('id','desc')->where('status','=','1')->get();


           return view('articole',['articles'=>$articles, 'categories'=>$categories  ]);
    }

    public function category($id)
    {

            $categories =Category::all();
            $count =DB::table('articles')
            ->join('categories','articles.categoryId', '=','categories.id')
             ->join('users','articles.authorId', '=','users.id')
            ->select('articles.*')
            ->where('categories.id','=',$id)->orderBy('id','desc')->where('status','=','1')->count();

            $articles = DB::table('articles')
             ->join('categories','articles.categoryId', '=','categories.id')
              ->join('users','articles.authorId', '=','users.id')
             ->select('articles.*','users.name AS userName', 'categories.name as categoryName')
             ->where('categories.id','=',$id)->orderBy('id','desc')->where('status','=','1')->get();

             return view('articole-categorie',['articles'=>$articles, 'categories'=>$categories, 'count'=>$count ]);
          //   if($count!==0)
          //   {
          //   $articles = DB::table('articles')
          //  ->join('categories','articles.categoryId', '=','categories.id')
          //   ->join('users','articles.authorId', '=','users.id')
          //  ->select('articles.*','users.name AS userName', 'categories.name as categoryName')
          //  ->where('categories.id','=',$id)->orderBy('id','desc')->where('status','=','1')->get();

          //  return view('articole-categorie',['articles'=>$articles, 'categories'=>$categories ]);
          //   }

          //   else
          //   {
          //      return redirect('/articole');
          //     //return view('articole-categorie',['articles'=>$articles, 'categories'=>$categories ]);
          //   }

    }

    public function adminIndex()
    {

            $categories =Category::all();
           $articles = DB::table('articles')
           ->join('categories','articles.categoryId', '=','categories.id')
            ->join('users','articles.authorId', '=','users.id')
           ->select('articles.*','users.name AS userName', 'categories.name as categoryName')->orderBy('id','desc')->get();




           return view('view-articles',['articles'=>$articles, 'categories'=>$categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $article = new Article();
      $article->categoryId = $req->categoryId;
      $article->authorId = $req->authorId;
      $article->title = $req->title;
      $article->description = $req->description;
      $article->content = $req->content;
      $article->status = 1;


     if ($req->hasFile('image')) {

         $file = $req->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $directory = "Images/Article/";

         $file->move($directory, $filename) ;
         $article->image = $filename;
     }
    //  $article->save();
    try { 
      $article->save();
    } catch(\Illuminate\Database\QueryException $ex){ 
    return redirect('/view-articles')->with('eroareBD', /*$ex->getMessage()*/'Articolul nu a putut fi adaugat. Eroare BD!');
    }

     return redirect('/view-articles');


    }


    public function storeUser(Request $req)
    {
      $userSession = Auth::user()->id;
      $article = new Article();
   $article->categoryId = $req->categoryId;
     $article->authorId = $userSession;
     $article->title = $req->title;
    $article->description = $req->description;
     $article->content = $req->content;
     if ($req->hasFile('image')) {

         $file = $req->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $directory = "Images/Article/";

         $file->move($directory, $filename) ;
         $article->image = $filename;
     }
    //  $article->save();
    try { 
      $article->save();
    } catch(\Illuminate\Database\QueryException $ex){ 
    return redirect('/articole')->with('eroareBD', /*$ex->getMessage()*/'Articolul nu a putut fi adaugat. Eroare BD!');
    }

     return redirect('/articole')->with('articolAdaugat', 'Articolul a fost adăugat cu succes! Acesta va fi vizibil după aprobare!');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categories =Category::all();
      $comments = DB::table('comments')
      ->join('articles','comments.articleId', '=','articles.id')
      ->join('users','comments.userId', '=','users.id')
      ->select('users.name AS userName', 'users.picture AS userPicture', 'users.id AS idFromUser', 'articles.title AS articleTitle', 'articles.Id AS idFromArticles', 'comments.*')->where('articles.id','=',$id)->orderBy('comments.id','desc')->get();
     $articles = DB::table('articles')
     ->join('categories','articles.categoryId', '=','categories.id')
      ->join('users','articles.authorId', '=','users.id')
     ->select('articles.*','users.name AS userName', 'categories.name as categoryName')->where('articles.id','=',$id)->orderBy('id','desc')->get();


     $total = 0;
     $ratingsSum = DB::table('comments')->where('articleId', '=', $id)->get();

     $calculateRatings =  json_decode($ratingsSum, true);

     foreach ($calculateRatings as $calculateRating)
     {
       if($calculateRating['approve'] === 1) {
      $total += $calculateRating['rating'];
}
     }

     $totalRatings = DB::table('comments')->where('articleId', '=', $id)->where('approve','=','1')->count();

     $ratingsNum =  json_decode($totalRatings, true);

    if ($ratingsNum > 0 ) {
     $calculateRating1 = ($total / $ratingsNum) ;
     $calculateRating = $calculateRating1 ;
    }

    else {
       $calculateRating = 'Acest articol nu are recenzii';
    }


     return view('continut-articol',['calculateRating'=>$calculateRating, 'totalRatings'=>$totalRatings, 'articles'=>$articles, 'categories'=>$categories, 'comments' => $comments ]);



    }



    function  searchArticlesResult(){


    $search = $_POST['article'];

       $categories =category::all();
       $data = DB::table('articles')
      ->join('categories','articles.categoryId', '=','categories.id')
        ->join('users','articles.authorId', '=','users.id')
      ->select('articles.*','categories.id AS joinIdCategory', 'categories.name as categoryName','users.id AS joinIdUser', 'users.name AS userName')->where('articles.title', 'LIKE', "%$search%")->where('status','=','1')->orderBy('id','desc')->get();



      return view('cautare-articol',['articles'=>$data, 'categories'=>$categories]);



    }

    function  searchArticlesCategory($name){


       $categories =category::all();
       $data = DB::table('articles')
      ->join('categories','articles.categoryId', '=','categories.id')
        ->join('users','articles.authorId', '=','users.id')
      ->select('articles.*','categories.id AS joinIdCategory', 'categories.name as categoryName','users.id AS joinIdUser', 'users.name AS userName')->where('categories.name', '=', $name)->get();



      return view('cautare-articol-categorie',['articles'=>$data, 'categories'=>$categories]);

      }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users =User::all();
      $categories =category::all();
      $data = DB::table('articles')
     ->join('categories','articles.categoryId', '=','categories.id')
        ->join('users','articles.authorId', '=','users.id')
     ->select('articles.*','categories.id AS joinIdCategory', 'categories.name AS joinNameCategory', 'users.id AS joinIdUser', 'users.name AS joinNameUser')->where('articles.id','=',"$id")->get();
     return view('edit-article',['articles'=>$data, 'categories' => $categories, 'users' => $users ]);
    }

    public function userEdit($id)
    {
      $users =User::all();
      $categories =category::all();
      $data = DB::table('articles')
     ->join('categories','articles.categoryId', '=','categories.id')
        ->join('users','articles.authorId', '=','users.id')
     ->select('articles.*','categories.id AS joinIdCategory', 'categories.name AS joinNameCategory', 'users.id AS joinIdUser', 'users.name AS joinNameUser')->where('articles.id','=',"$id")->get();
     return view('edit-articleuser',['articles'=>$data, 'categories' => $categories, 'users' => $users ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {

           $article=Article::find($req->id);
           $article->categoryId = $req->categoryId;
             $article->authorId = $req->authorId;
             $article->title = $req->title;
             $article->description = $req->description;
             $article->content = $req->content;
             $article->status = $req->status;

             if(isset($req->image) AND !empty($req->image)) {

             if ($req->hasFile('image')) {

                 $file = $req->file('image');
                 $extension = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extension;
                 $directory = "Images/Article/";

                 $file->move($directory, $filename) ;
                 $article->image = $filename;
             }
           }
           else {

              $article->image = $req->imageText;
           }

            //  $article->save();
            try { 
              $article->save();
            } catch(\Illuminate\Database\QueryException $ex){ 
            return redirect('/view-articles')->with('eroareBD', /*$ex->getMessage()*/'Articolul nu a putut fi modificat. Eroare BD!');
            }

             return redirect('/view-articles');
    }

    public function userUpdate(Request $req)
    {

           $article=Article::find($req->id);
           $article->categoryId = $req->categoryId;
             $article->title = $req->title;
             $article->description = $req->description;
             $article->content = $req->content;

             if(isset($req->image) AND !empty($req->image)) {

             if ($req->hasFile('image')) {

                 $file = $req->file('image');
                 $extension = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extension;
                 $directory = "Images/Article/";

                 $file->move($directory, $filename) ;
                 $article->image = $filename;
             }
           }
           else {

              $article->image = $req->imageText;
           }

             $article->save();

             return redirect('/articolele-mele');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Article::find($id);
      $data->delete();
      return back()->withInput();
    }

    public function approveArticle($id)
    {
  $updateStatus = Article::find($id);
    $updateStatus->status =  1;
    $updateStatus->save();
    return back()->withInput();
    }
    public function disapproveArticle($id){

  $updateStatus = Article::find($id);
  $updateStatus->status =  0;
  $updateStatus->save();
  return back()->withInput();

  }
}
