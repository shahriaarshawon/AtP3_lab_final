<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scout;
use App\ScoutRequest;
use Auth;

class scoutController extends Controller
{
    public function index(){
        $scouts=Scout::where('status','active')->get();
        $user = Auth::user();
        $myscout=$user->scouts;
        // dd($myscout);
        return view('scouts.home')->with(['scouts'=>$scouts,'myscouts'=>$myscout]);
    }
    public function addpost(Request $req){
        // dd($req->all());
        $newPost=new Scout;
        $newPost->user_id=Auth::user()->id;
        $newPost->place_name=$req->place_name;
        $newPost->place_route=$req->place_route;
        $newPost->place_descripttion=$req->place_description;
        $newPost->save();
        return redirect()->back();
        // return view('scouts.home');
    }

    public function requestToAdmin($id)
    {
        $scout=Scout::find($id);
        return view('scouts.editPost')->with(['scout'=>$scout]);
    }
    public function PostrequestToAdmin(Request $req){
        $requestPost=new ScoutRequest;
        $requestPost->user_id=Auth::user()->id;
        $requestPost->scout_id=$req->scout_id;
        $requestPost->place_name=$req->place_name;
        $requestPost->place_route=$req->place_route;
        $requestPost->place_descripttion=$req->place_description;
        $requestPost->save();
        return redirect()->back();
        // return "";
    }
}
