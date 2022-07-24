<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reset_pass;
use DB;
class ResetpassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data  = DB::table('reset_passes')
      ->join('users','reset_passes.email', '=','users.email')
      ->select('users.name AS userName', 'users.id AS userId', 'reset_passes.*')->get();
      return view('view-resetpasses',['resetpasses'=>$data]);
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
      $check =   DB::table('users')->where('email', '=', $request->email)->count();
      if($check > 0) {
      $messages_resetpass = new reset_pass();
      $messages_resetpass->email = $request->email;
      $messages_resetpass->phone = $request->phone;
      $messages_resetpass->message = $request->message;
      $messages_resetpass->save();
      return redirect('/')->with('mesajAdaugat', 'Mesajul a fost trimis cu succes acesta va primi un raspuns in cel mai scurt timp posibil!');
    }
    else {
      return redirect('/')->with('eroare', 'Această adresă de email nu există în baza de date!');
    }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = reset_pass::find($id);
      $data->delete();
      return back()->withInput();
    }
}
