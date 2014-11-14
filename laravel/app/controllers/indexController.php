<?php

class indexController extends BaseController {

	public function index(){
			// Auth::check()
			// Auth::user()
		if(Auth::check()){
			$user = (Session::get('user'));
			return View::make('user2');
		}
		else {
			return View::make('index');
		}
	}

	public function login(){
		if(Auth::check()){
			return View::make('user2');
		}
		else {
			return View::make('login2');
		}
	}
	public function authendatabase(){
		if (Auth::attempt(array('email' => Input::get('mail'), 'password' =>Input::get('pass')))){
			return View::make('user2');
		}
		return "no";
	}

	public function signup(){
		$user = new User;
		$user->name = Input::get('name');
		$user->lastname = Input::get('lname');
		$user->phone = Input::get('phone');
		$user->email = Input::get('mail');

		$pass = Input::get('pass');
		$pass2 = Input::get('pass2');
		if($pass == $pass2){
			$password = Hash::make($pass);
		}else{
			return View::make('register');
		}

		$user->password = $password;
		$user->booked = 0;
		$user->save();
		return Redirect::to('login2');
	}

	public function signout(){
		Auth::logout();
		return Redirect::to('/');
	}

	public function editUser(){
		$userid = Auth::user()->id;
		$user = User::find($userid);
		$user->name = Input::get('name');
		$user->lastname = Input::get('lname');
		$user->phone = Input::get('phone');
		$user->email = Input::get('mail');

		$pass = Input::get('pass');
		$pass2 = Input::get('pass2');
		if($pass == $pass2){
			$password = Hash::make($pass);
		}else{
			return View::make('register');
		}

		$user->password = $password;
		$user->save();
		return Redirect::to('/');
	}
}

?>