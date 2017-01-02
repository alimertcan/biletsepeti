<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Auth;
Use Session;

class UserController extends Controller
{
    public function getSignup(){
	return view('user.signup');
	}
	
	public function postSignup(Request $request){
	$this->validate($request,[
	 'email' => 'email|required|unique:users',
	 'password' => 'required|min:4'
	 ]);
	$users=new User([
	'email'=> $request->input('email'),
	'password' => bcrypt($request->input('password'))
	]);
	$users->save();
	
	Auth::login($users);
	
	if(Session::has('oldurl')){
	$oldurl=Session::get('oldurl');
	Session::forget('oldurl');
	return redirect()->to($oldurl);
	}
	
	return redirect()->route('user.profile');
	}
	 public function getSignin(){
	return view('user.signin');
	}
	 public function postSignin(Request $request){
	$this->validate($request,[
	 'email' => 'email|required',
	 'password' => 'required|min:4'
	 ]);
	
	if(Auth::attempt(['email'=> $request->input('email'),'password'=> $request->input('password')])){
	if(Session::has('oldurl')){
	$oldurl=Session::get('oldurl');
	Session::forget('oldurl');
	return redirect()->to($oldurl);
	}
	return redirect()->route('user.profile');
	}
	return redirect()->back();
	}
	 public function getProfile(){
	 $users = User::all();
	 $orders=Auth::user()->orders;
	 $orders->transform(function($order,$key){  //can edit each order collection  my cart is serialized 
			$order->cart=unserialize($order->cart);
			return $order;
	 });
	return view('user.profile',['orders'=>$orders],['users'=>$users]);
	}
	 public function getLogout(){
	Auth::logout();
	return redirect()->route('user.signin');
	}
	public function geteditProfile(){
	 $users = User::all();
	 return view('user.editprofile',['users'=>$users]);
	 }
	public function posteditProfile(Request $request){
	
	$id=$request->input('id');
	$user=User::find($id);
	if(!$user) {
    return response('User not found', 404);
  }
	$user->first_name = $request->input('first_name');
	$user->last_name = $request->input('last_name');	
	 $user->save(); 
	 
	 
	 return redirect()->route('user.editprofile',[$user->id])->with('message', 'User has been updated!');
	 }
}
