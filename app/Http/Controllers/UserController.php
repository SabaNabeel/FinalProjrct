<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function Profile(){
      return view('Profile',array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){
      //handle the avatar request
      if($request->hasFile('avatar')){
          $avatar= $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));

          $user = Auth::user();
          $user->avatar = $filename;
          $user->save();
        }
        return view('Profile',array('user' => Auth::user()));

    }

    public function show (){
      $user = user::all();
      return view ('show', ['user' => $user]);
    }


}
