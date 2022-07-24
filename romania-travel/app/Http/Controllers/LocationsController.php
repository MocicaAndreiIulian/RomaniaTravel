<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;
use App\Models\Gallery;
use Auth;
use App\Models\User;
class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $locations = DB::table('locations')
       ->join('users','locations.userId', '=','users.id')
      ->select('locations.*','users.name AS userName',)->orderBy('id','desc')->get();


      return view('recenzii-locatii',['locations'=>$locations ]);
    }

    public function adminIndex()
    {
      $locations = DB::table('locations')
       ->join('users','locations.userId', '=','users.id')
      ->select('locations.*','users.name AS userName',)->orderBy('id','desc')->get();


      return view('view-posts',['locations'=>$locations]);
    }

    function  searchLocationsResult(){

      if (isset($_POST['search'])) {
        $search = $_POST['locations'];

        $locations = DB::table('locations')
         ->join('users','locations.userId', '=','users.id')
        ->select('locations.*','users.name AS userName',)->orderBy('id','desc')
        ->where('locations.title', 'LIKE', "%$search%")->where('approve','=','1')->orderBy('id','desc')->get();



          return view('cauta-postare',['locations'=>$locations ]);
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
      $userId = Auth::user()->id;

      $location = new location();
      $location->userId = $userId;
    //    $location->image = 'blabla';
      $location->title = $request->title;
      $location->location = $request->locations;
      $location->lat = $request->latbox;
      $location->lng = $request->lngbox;
      $location->content = $request->content;
          $location->description = $request->description;
      $location->recommend = $request->recommend;
          $location->purpose = $request->purpose;
          if ($request->hasFile('image')) {

              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
               $filename = pathinfo($file, PATHINFO_FILENAME).'.'.$extension;
              $directory = "Images/Post/";

              $file->move($directory, $filename) ;
              $location->image = $filename;
          }
        $location->approve = '0';
        //$location->save();
        try { 
          $location->save();
        } catch(\Illuminate\Database\QueryException $ex){ 
        return redirect('/adauga-postare')->with('eroareBD', /*$ex->getMessage()*/'Postarea nu a putut fi adaugată. Eroare BD!');
        }
        


      $locationId = DB::table('locations')->select('id')->where('id', \DB::raw("(select max(`id`) from locations)"))->get()->take(1);
      $locationMaxIds =  json_decode($locationId, true);
      foreach ($locationMaxIds as $locationMaxId) {
      $maxID = $locationMaxId['id'];
      }
      $this->validate($request, [
               'images' => 'required',
               'images.*' => 'required'
       ]);

       $files = [];
       if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $gallery = new Gallery();
               $gallery->locationId = $maxID;
             $file = $image;
             $extension = $file->getClientOriginalExtension();
             $filename = pathinfo($file, PATHINFO_FILENAME).'.'.$extension;
             $directory = "Images/Post/";

             $file->move($directory, $filename) ;
             $gallery->image = $filename;

            //  $gallery->save();
            try { 
              $gallery->save();
            } catch(\Illuminate\Database\QueryException $ex){ 
            return redirect('/adauga-postare')->with('eroareBD', /*$ex->getMessage()*/'Imaginile din galerie nu au putut fi adăugate. Eroare BD!');
            }
           }

           
       }
       return redirect('/recenzii-locatii')->with('postareAdaugata', 'Postarea a fost adaugată cu succes! Aceasta va fi vizibilă după aprobare!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      if(isset(Auth::user()->id ) ) {
        $userId = Auth::user()->id;
      }
      $locations = DB::table('locations')
       ->join('users','locations.userId', '=','users.id')
      ->select('locations.*','users.name AS userName',)->where('locations.id', '=' , $id)->orderBy('locations.id','desc')->get();
        $galleries =Gallery::all()->where('locationId','=',$id);
      $opinions = DB::table('opinions')
      ->join('users','opinions.userId', '=','users.id')
          ->join('locations','opinions.locationId', '=','locations.id')
     ->select('opinions.*','users.name AS userName', 'locations.id AS locationId', 'users.picture AS userPicture', 'users.id AS userId')
     ->where('locationId', '=' , $id)
     ->where('opinions.approve','=','1')
     ->orderBy('opinions.id','desc')->get();
      $statistics['usefulReactions'] = DB::table('reactions')->where('locationId', '=', $id)->where('useful', '>', '0')->count();
      $statistics['uselessReactions'] =  DB::table('reactions')->where('locationId', '=', $id)->where('useless', '>', '0')->count();
        if(isset(Auth::user()->id )) {
      $uselessCheck =  DB::table('reactions')->where('locationId', '=', $id)->where('useless', '>', '0')->where('userId','=', $userId)->count();
      $usefulCheck =   DB::table('reactions')->where('locationId', '=', $id)->where('useful', '>', '0')->where('userId','=', $userId)->count();
    }
      // $reactionId = DB::table('reactions')
      //  ->join('users','reactions.userId', '=','users.id')
      //  ->join('locations','reactions.locationId', '=','locations.id')
      // ->select('reactions.*', 'locations.id AS locationId')->where('locationId', '=' , $id)->get();
      // dd($id,$userId);
      
      // dd($reactionId);
          if(isset(Auth::user()->id ) ) {
            $reactionId = DB::table('reactions')->where('locationId', '=', $id)->where('userId','=', $userId)->get();
      return view('continut-postare',['locations'=>$locations, 'statistics' => $statistics, 'uselessCheck' => $uselessCheck, 'usefulCheck' => $usefulCheck, 'reactionId' => $reactionId, 'opinions' => $opinions, 'galleries' => $galleries ]);
    }
    else {

      return view('continut-postare',['locations'=>$locations, 'statistics' => $statistics, 'opinions' => $opinions, 'galleries' => $galleries ]);

    }

    }

    public function showAdmin($id)
    {
      $location = DB::table('locations')
      ->select('locations.*','users.name AS userName',)->where('locations.id', '=' , $id)->orderBy('locations.id','desc')->get();
      return view('continut-postare-admin',['location'=>$location]);

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
      $data = DB::table('locations')
        ->join('users','locations.userId', '=','users.id')
     ->select('locations.*', 'users.id AS joinIdUser', 'users.name AS joinNameUser')->where('locations.id','=',"$id")->get();
     return view('edit-location',['locations'=>$data,  'users' => $users ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function approvePost($id)
     {
   $updateStatus = Location::find($id);
     $updateStatus->approve =  1;
     $updateStatus->save();
     return back()->withInput();
     }
     public function disapprovePost($id){

   $updateStatus = Location::find($id);
   $updateStatus->approve =  0;
   $updateStatus->save();
   return back()->withInput();

   }


    public function update(Request $request)
    {
    //    $location->image = 'blabla';
    $location=Location::find($request->id);
      $location->title = $request->title;
      // $location->location = $request->locations;
      // $location->lat = $request->latbox;
      // $location->lng = $request->lngbox;
      $location->content = $request->content;
          $location->description = $request->description;
      // $location->recommend = $request->recommend;
      //     $location->purpose = $request->purpose;
          if ($request->hasFile('image')) {

              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
               $filename = pathinfo($file, PATHINFO_FILENAME).'.'.$extension;
              $directory = "Images/Post/";

              $file->move($directory, $filename) ;
              $location->image = $filename;
          }
        $location->approve = '0';
        $location->save();


      $locationId = DB::table('locations')->select('id')->where('id', \DB::raw("(select max(`id`) from locations)"))->get()->take(1);
      $locationMaxIds =  json_decode($locationId, true);
      foreach ($locationMaxIds as $locationMaxId) {
      $maxID = $locationMaxId['id'];
      }
      $this->validate($request, [
               'images' => 'required',
               'images.*' => 'required'
       ]);

       $files = [];
       if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $gallery = new Gallery();
               $gallery->locationId = $maxID;
             $file = $image;
             $extension = $file->getClientOriginalExtension();
             $filename = pathinfo($file, PATHINFO_FILENAME).'.'.$extension;
             $directory = "Images/Post/";

             $file->move($directory, $filename) ;
             $gallery->image = $filename;

         $gallery->save();
           }

           
       }
       return redirect('/view-posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $data = Location::find($id);
       $data->delete();
       return back()->withInput();
     }
}
