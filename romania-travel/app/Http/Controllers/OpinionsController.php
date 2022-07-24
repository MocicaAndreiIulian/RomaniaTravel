<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Opinion;
class OpinionsController extends Controller
{
  public function index()
  {
    $opinions = DB::table('opinions')
    ->join('locations','opinions.locationId', '=','locations.id')
    ->join('users','opinions.userId', '=','users.id')
    ->select('users.name AS userName', 'users.id AS idFromUser', 'locations.title AS postTitle',  'locations.Id AS idFromLocation', 'opinions.*')->get();


    return view('view-opinions',['opinions'=>$opinions ]);


  }

    public function store(Request $request)
    {
      $opinions = new Opinion();
      $opinions->userId = $request->userId;
      $opinions->locationId = $request->locationId;
      $opinions->comment = $request->comment;
      $opinions->save();
      return redirect('/continut-postare-'.$request->locationId);

    }

    public function update(Request $request, $id)
    {
      $opinion = Opinion::find($id);
       $opinion->approve = 1;
       $opinion->save();
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
      $data = Opinion::find($id);
      $data->delete();
      return back()->withInput();
    }

}
