<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class commonController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function seeComment($id)
    {
        $comments=Comment::where('scout_id',$id)->get();
        return view('comment')->with(['comments'=>$comments]);
    }
}
