<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Feedback;
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
        $today = date('Y-m-d', strtotime(str_replace('-', '/', date('Y-m-d'))));
        // $today=strtotime(date_create(date('Y-m-d')));
        // $last_given=date_create($user->last_blood_donation);
        $users = User::where('id', '!=', Auth::id())->where('type','!=','Admin')->get();
        $recent_donors = User::where('id', '!=', Auth::id())
            ->where('type','!=','Admin')
            ->whereRaw("abs(DATEDIFF('$today', last_blood_donation)) <= 91")
            ->get();
        $available_donors = User::where('id', '!=', Auth::id())
        ->where('type','!=','Admin')
        ->whereRaw("abs(DATEDIFF('$today', last_blood_donation)) >= 91")
        ->get();
        // dd($recent_donors);
        $volunteers = User::where('id', '!=', Auth::id())->where('type','volunteer')->get();

        // $today=date_create(date('Y-m-d'));

        // $recent_donors=array();
        // $days=90;
        // $available_donors=array();
        // $recent_donors= User::whereRaw('DATEDIFF(date_create(last_blood_donation),'.$today.') < ?')
        //     ->setBindings([$days])
        //     ->get();

        // dd($recent_donors);

        // foreach ($users as $user) {
        //     // dd(date('Y-m-d'));
        //     // $last_given=date_create($user->last_blood_donation);
        //     // dd($last_given);
        //     // dd(date_diff($today,$last_given));
        //     $date_diff=date_diff($today,$last_given);
        //     if ($date_diff->format("%a")<=91) {
        //         // dd($user);
        //         $recent_donors=array_push($recent_donors,$user);
        //         dd($recent_donors);
        //         // foreach($recent_donors as $user){
        //         //     // dd(count($user));
        //         //     echo "<br><br>".$user.' dont'."<br><br>";
        //         // }
        //     }
        //     else
        //     {
        //         $available_donors=array($user);
        //         // foreach($available_donors as $user){
        //         //     echo "<br><br>".$user.' can'."<br><br>";
        //         // }
        //     }
        //         // dd($blood_given_donor);

        //     // echo $user->last_blood_donation;
        //     // dd($user->last_blood_donation);
        // }
        // dd(count($recent_donors));

        // dd($users);
        return view('home',['users'=>$users, 'volunteers'=>$volunteers, 'recent_donors'=>$recent_donors, 'available_donors'=>$available_donors]);
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
    public function submitfeedback(Request $req)
    {
        $feedback=new Feedback();
        $feedback->email=$req->email;
        $feedback->feedback=$req->feedback;
        $feedback->save();
        return redirect()->back();
    }
}
