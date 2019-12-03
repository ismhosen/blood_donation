<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Messenger;
use Auth;
use DB;
use Session;
class Usercontroller extends Controller
{
    public function index()
    {
        return view('profile');
    }
    public function editprofile(Request $req)
    {
        $req->validate([
            'newName' => 'required|string|max:190',
            // 'changeImage' => 'nullable|image|mimes:jpeg,png,jpg',
            'newPhone_no' => 'required|string|max:190',
            'newBlood_group' => 'required',
            'newDescription' => 'required|string',
            'newAddress' => 'required|string',
        ]);
        if($req->changeImage=="")
        {
            $user= User::find(Auth::user()->id);
            $user->name=$req->newName;
            $user->phone_no=$req->newPhone_no;
            $user->address=$req->newAddress;
            $user->blood_group=$req->newBlood_group;
            $user->description=$req->newDescription;
            $user->save();
            return redirect()->back();  

        }else{
            $filename   =   Auth::user()->email;
            $extension  =   $req->changeImage->getClientOriginalExtension();      
            $filenametostore = $filename.".".$extension;
            $req->changeImage->move('images/profile_pictures',$filenametostore);

            $user= User::find(Auth::user()->id);
            $user->name=$req->newName;
            $user->phone_no=$req->newPhone_no;
            $user->image=$filenametostore;
            $user->address=$req->newAddress;
            $user->blood_group=$req->newBlood_group;
            $user->description=$req->newDescription;
            $user->save();
            return redirect()->back();  
        }
    }
    public function addLastBloodDonation(Request $req)
    {
        $user= User::find(Auth::user()->id);
        $user->last_blood_donation=$req->last_blood_donation;
        $user->save();
        return redirect()->back(); 
    }
    public function editPassword(Request $req)
    {
        $req->validate([
            'old_password' => 'required|string|min:5',
            // 'changeImage' => 'nullable|image|mimes:jpeg,png,jpg',
            'password' => 'required|string|min:5|confirmed',
        ]);
        
        if(Hash::check($req->old_password,Auth::user()->password))
        {   
            $user= User::find(Auth::user()->id);
            $user->password=Hash::make($req->password);
            $user->save();
            return redirect()->back(); 
        }else{
            Session::flash('msg', 'Password Doesn\'t Match');
            return redirect()->back();
        }
    }
    public function messenger()
    {
        // select all users except logged in user
        $users = User::where('id', '!=', Auth::id())->where('type','!=','Admin')->get();
        $my_id=Auth::id();

        return view('messenger',['users'=>$users]);
    }
    public function getUserMessage($to_id)
    {
        return view('messenger');
    }
    public function getMessage($user_id)
    {
        $my_id=Auth::id();
        // Get all message from selected user
        $messages = Messenger::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
         
    }
    public function sendMessage(Request $request)
    {
        // dd($request->all());
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;
        // dd($message) ;
        $data = new Messenger();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();
        // return redirect()->back();
    }

    public function AjaxSendMessage(Request $req)
    {
        $from=Auth::id();
        $to=$req->idd;
        $message=$req->message;
        
        $data = new Messenger();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();
        return redirect()->back();
    }
}
