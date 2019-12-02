<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Feedback;
use Auth;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('users',['users'=>$users]);
    }
    public function feedbacks()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks',['feedbacks'=>$feedbacks]);
    }
    public function deleteuser(Request $req)
    {
        // dd($req->user_id);
        $users=User::destroy($req->user_id);
        return redirect()->back();
    }
    public function deletefeedback(Request $req)
    {
        // dd($req->user_id);
        $users=Feedback::destroy($req->feedback_id);
        return redirect()->back();
    }
}
