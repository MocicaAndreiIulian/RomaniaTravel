<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Models\Location_question;
  use Illuminate\Support\Facades\DB;

class LocationQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $questions = DB::table('location_questions')
      ->join('users','location_questions.userId', '=','users.id')
      ->select('users.name AS userName', 'users.id AS idFromUser', 'location_questions.*')->orderBy('location_questions.id','desc')->get();
      return view('intrebari',['questions'=>$questions]);
    }
    function  searchQuestionsResult(){

      if (isset($_POST['search'])) {
        $search = $_POST['questions'];

        $questions = DB::table('location_questions')
        ->join('users','location_questions.userId', '=','users.id')
        ->select('users.name AS userName', 'users.id AS idFromUser', 'location_questions.*')
        ->where('location_questions.title', 'LIKE', "%$search%")->where('approve','=','1')->orderBy('id','desc')->orderBy('location_questions.id','desc')->get();



          return view('cauta-intrebare',['questions'=>$questions ]);
      }




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
      $question = new location_question();
      $question->userId = $request->userId;
      $question->title = $request->title;
      $question->question = $request->question;
      $question->save();
      return redirect('/intrebari')->with('intrebareAdaugata', 'Întrebarea a fost adaugată cu succes! Aceasta va fi vizibil după aprobare!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $questions = DB::table('location_questions')
      ->join('users','location_questions.userId', '=','users.id')
      ->select('users.name AS userName', 'users.picture AS userPicture', 'users.id AS idFromUser', 'location_questions.*')->where('location_questions.id','=',$id)->get();

      $answers = DB::table('location_answers')
      ->join('location_questions','location_answers.questionId', '=','location_questions.id')
      ->join('users','location_answers.userId', '=','users.id')
      ->select('users.name AS userName', 'users.id AS idFromUser', 'users.picture AS userPicture', 'location_questions.title AS questionTitle', 'users.scores', 'location_answers.*')->where('location_questions.id','=',$id)->where('location_answers.approve', '=', '1')->get();

      return view('vizualizare-intrebare',['questions'=>$questions, 'answers'=> $answers]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function approve($id)
     {
       $data = Location_question::find($id);
       $data->approve = 1;
       $data->save();
       return back()->withInput();
     }
     public function solved($id)
     {
       $data = Location_question::find($id);
       $data->solved = 2;
       $data->save();
       return back()->withInput();
     }


    public function destroy($id)
    {
      $data = Location_question::find($id);
      $data->delete();
      return back()->withInput();
    }
}
