<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scout;
use App\Comment;
use Auth;

class userController extends Controller
{
    public function index(){
        $scouts=Scout::where('status','active')->get();     
        return view('users.home')->with(['scouts'=>$scouts]);
    }
    public function addComment(Request $req)
    {
        // dd($req->all());
        $comment=new Comment;
        $comment->scout_id=$req->scout_id;
        $comment->user_id=Auth::user()->id;
        $comment->comment=$req->comment;
        $comment->save();
        return redirect()->back();
    }
    public function searchplaces(Request $req)
    {
        $results=Scout::where('place_name','like','%'.$req->str.'%')
                        ->where('status','active')
                        ->get();
        return view('users.searchpage')->with(['results'=>$results]);
    }
}
