<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        // dd($users);
        return view('home',['users'=>$users]);
    }
    public function signup()
    {
        return view('signup');
    }
    public function signin()
    {
        return view('signin');
    }
    public function searchBlood()
    {
        $group=$_GET['group'];
        $value=$_GET['value'];
        if ($group=='area') {
            $users=User::where('address','like','%'.$value.'%')->get();
        } else {
            $users=User::where('blood_group',$value)->get();
        }
        
        // $users=User::where('blood_group','like','%'.$str.'%')->get();
        
        return view('ajaxSearchResults',['users'=>$users]);
    }
}
