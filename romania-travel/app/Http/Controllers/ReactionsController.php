<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Reaction;
use Illuminate\Support\Facades\DB;
class ReactionsController extends Controller
{
    public function usefulPost(Request $req){
      $userId = Auth::user()->id;

      $check =   DB::table('reactions')->where('locationId', '=', $req->locationId)->where('userId','=', $userId)->count();

        $usefulCheck =   DB::table('reactions')->where('locationId', '=', $req->locationId)->where('userId','=', $userId)->where('useful','>','0')->count();
        
      if($check === 0)
      {
          $reaction = new Reaction();
          $reaction->userId = $userId;
          $reaction->locationId = $req->locationId;
          $reaction->useful = 1;
          $reaction->save();
          return redirect('/continut-postare-'.$req->locationId);
        }
        elseif ($check > 0) {
        $reaction=Reaction::find($req->reactionId);
        if($reaction->useful === 1) {
        $reaction->useful = 0;
        $reaction->useless = 0;
        $reaction->save();
      }
      elseif($reaction->useful === 0)
      {
          $reaction->useful = 1;
          $reaction->useless = 0;
          $reaction->save();

      }

          return redirect('/continut-postare-'.$req->locationId);
      }
    }

      public function uselessPost(Request $req){
        $userId = Auth::user()->id;

        $check =   DB::table('reactions')->where('locationId', '=', $req->locationId)->where('userId','=', $userId)->count();

        $uselessCheck =   DB::table('reactions')->where('locationId', '=', $req->locationId)->where('userId','=', $userId)->where('useless','>','0')->count();
        if($check === 0)
        {
            $reaction = new Reaction();
            $reaction->userId = $userId;
            $reaction->locationId = $req->locationId;
            $reaction->useless = 1;
            $reaction->save();
            return redirect('/continut-postare-'.$req->locationId);
          }
          elseif ($check > 0) {
          $reaction=Reaction::find($req->reactionId);
          if($reaction->useless === 1) {
          $reaction->useful = 0;
          $reaction->useless = 0;
          $reaction->save();
        }
        elseif($reaction->useless === 0)
        {
            $reaction->useful = 0;
            $reaction->useless = 1;
            $reaction->save();

        }

            return redirect('/continut-postare-'.$req->locationId);
        }
    }
}
