<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
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
}
