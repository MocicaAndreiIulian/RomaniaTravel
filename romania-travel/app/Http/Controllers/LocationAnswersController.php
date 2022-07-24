<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location_answer;
use App\Models\Location_question;
use App\Models\User;
  use Illuminate\Support\Facades\DB;
class LocationAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  //    $disapprovedComments =DB::table('location_questions')
//->join('location_answers','location_questions.id', '=','location_answers.questionId')

      $answerQuestions = DB::table('location_questions')
      ->join('users','location_questions.userId', '=','users.id')
      ->select( 'users.name AS userName', 'users.id AS idFromUser', 'location_questions.*')->get();


      return view('questions-answers',['answerQuestions'=>$answerQuestions]);
    }

    public function indexAdmin()
    {
  //    $disapprovedComments =DB::table('location_questions')
//->join('location_answers','location_questions.id', '=','location_answers.questionId')

      $locationAnswers = DB::table('location_answers')
      ->join('users','location_answers.userId', '=','users.id')
      ->join('location_questions','location_questions.id', '=','location_answers.questionId')
      ->select( 'users.name AS userName', 'users.id AS idFromUser', 'location_answers.*', 'location_questions.title as QuestionTitle')->get();

      $answerQuestions = DB::table('location_questions')
      ->join('users','location_questions.userId', '=','users.id')
      ->select( 'users.name AS userName', 'users.id AS idFromUser', 'location_questions.*')->get();

      return view('answers',['locationAnswers'=>$locationAnswers,'answerQuestions'=>$answerQuestions]);
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
    public function store(Request $request)
    {

        $answers = new location_answer();
        $answers->questionId = $request->questionId;
    $answers->userId =  $request->userId;
      $answers->answer = $request->answer;
        $answers->save();
        return redirect('/vizualizare-intrebare-'.$request->questionId)->with('raspunsAdaugat', 'Raspunsul a fost adăugat cu succes! Acesta va fi vizibil după aprobare!');



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
    public function update(Request $request)
    {
      $question = Location_question::find($request->questionId);
       $question->solved = 1;
       $question->save();
       $answer = Location_answer::find($request->id);
        $answer->favorite = 1;
        $answer->save();
        $user = User::find($request->userId);
        $user->scores =  $request->scores + 5;
        $user->save();
        return back()->withInput();
    }

    public function approveComments($id)
    {
  $updateStatus = Location_answer::find($id);
    $updateStatus->approve =  1;
    $updateStatus->save();
    return back()->withInput();
    }
    public function disapproveComments($id){

$updateStatus = Location_answer::find($id);
  $updateStatus->approve =  0;
  $updateStatus->save();
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
      $data = Location_answer::find($id);
      $data->delete();
      return back()->withInput();
    }
}
