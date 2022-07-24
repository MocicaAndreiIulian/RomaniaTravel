<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comments = DB::table('comments')
      ->join('articles','comments.articleId', '=','articles.id')
      ->join('users','comments.userId', '=','users.id')
      ->select('users.name AS userName', 'users.id AS idFromUser', 'articles.title AS articleTitle',  'articles.Id AS idFromArticles', 'comments.*')->get();


      return view('view-comments',['comments'=>$comments ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $comments = new Comment();
      $comments->articleId = $request->articleId;
  $comments->userId =  $request->userId;
    $comments->comment = $request->comment;
      $comments->rating = $request->rating;
      $comments->approve = '0';
      $comments->save();
      return redirect('/continut-articol-'.$request->articleId)->with('comentariuAdaugat', 'Comentariul a fost adăugat cu succes! Acesta va fi vizibil după aprobare!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $comment = Comment::find($id);
       $comment->approve = 1;
       $comment->save();
         return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Comment::find($id);
      $data->delete();
      return back()->withInput();
    }
}
