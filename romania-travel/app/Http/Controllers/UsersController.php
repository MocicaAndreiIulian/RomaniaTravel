<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
  function  index(){
     $data =User::all();
     return view('view-users',['users'=>$data]);

  }

public function userView($id)
{

   $users =User::all()->where('id','=',$id);

$statistics['userArticles'] = DB::table('articles')->where('authorId', '=', $id)->count();
  $statistics['userLocations'] = DB::table('locations')->where('userId', '=', $id)->count();
  $statistics['userQuestions'] = DB::table('location_questions')->where('userId', '=', $id)->count();
  $statistics['userAnswers'] = DB::table('location_answers')->where('userId', '=', $id)->where('favorite','=','1')->count();

return view('vizualizare-utilizator', ['statistics'=>$statistics, 'users' => $users  ]);
}


  function  view($id){

    $users = DB::table('users')
   ->select('users.*')->where('id','=',"$id")->get();

    return view('user-edit',['users'=>$users]);


  }

  public function update(Request $req)
   {
      $check = User::all()->where('email','=',$req->email)->where('id', '!=',$req->id)->count();
        if($check==0)
        {
       $user=user::find($req->id);
       $user->name = $req->name;
        $user->email = $req->email;
            $user->type = $req->type;
            // $user->password=Hash::make($req->password);
       $user->save();
       return redirect('/view-users');
        }
        else{
            return redirect('/user-edit-'.$req->id)->with('AcelasiEmail', 'Acest email este folosit de un alt utilizator!');
        }
   }

   function destroy($id){
       $data = User::find($id);
       $data->delete();
       return back()->withInput();
   }

   function  restetPassword($id){

    $users = DB::table('users')
   ->select('users.*')->where('id','=',"$id")->get();

    return view('user-reset',['users'=>$users]);


  }

  function  restetPasswordSchimba($id){

    $users = DB::table('users')
   ->select('users.*')->where('id','=',"$id")->get();

    return view('user-schimba',['users'=>$users]);


  }




  public function updatePassword(Request $req)
   {
    $user=user::find($req->id);
    $user->name = $req->name;
        $user->email = $req->email;
            $user->type = $req->type;
    $user->password=Hash::make($req->password);
       $user->save();
       return redirect('/view-users');
   }

   public function updatePasswordSchimba(Request $req)
   {
    $user=user::find($req->id);
    $user->name = $req->name;
        $user->email = $req->email;
            $user->type = $req->type;
    $user->password=Hash::make($req->password);
       $user->save();
       return redirect('/view-resetpasses');
   }


   public function update3(Request $req)
   {
    $user=user::find($req->user_id);
    $user->name = $req->name;
        $user->email = $req->email;
            $user->type = $req->type;
    $user->password=Hash::make($req->password);
       $user->save();
       return redirect('/view-resetpasses');
   }

}
