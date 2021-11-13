<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){

        $data['allData'] = user::where('usertype','Admin')->get();
        return view('backend.user.view_user',$data);

    }

    public function Useradd(){

        return view('backend.user.add_user');
    }

      public function UserStore(Request $req){

        $req->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $code = rand(0000,9999);
        $data->usertype = 'Admin';
        $data->role = $req->role;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = bcrypt($code);
        $data->code = $code;

        $data->save();

        $notification = array(
    		'message' => 'User Inserted Successfully',
    		'alert-type' => 'success'
    	);

        return Redirect()->route('user.view')->with($notification);


     }

     public function UserEdit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit_user',compact('editData'));

    }



    public function UserUpdate(Request $request, $id){

    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->role = $request->role;
    	$data->save();

    	$notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification);

    }



    public function UserDelete($id){
    	$user = User::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification);

    }
}
