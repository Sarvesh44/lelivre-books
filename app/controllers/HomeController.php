<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$title = 'LiLevre Login Page';
		return View::make('home.index')
			->with('title', $title);
	}

	public function getLogin()
	{
		$title = 'LiLevre Login Page';
	return View::make('home.index')
		->with('title', $title);
	}

		public function getWelcome()
	{
		$title = 'LiLevre Welcome Page';
		return View::make('home.welcome')
			->with('title', $title);
	}

	public function postLogin()
	{

		$input = Input::all();
		$rules = array('username' => 'required','password' => 'required');
		$v = Validator::make($input, $rules);

		if($v -> fails()){
			
			return Redirect::to('login')
				->withErrors($v);
		} else {
			$credentials = array('username' => $input['username'] , 'password' => $input['password']);
			
			if(Auth::attempt($credentials)){
				return Redirect::to('lelivre');
			} else {
				return Redirect::to('login')->with('message','Invalid Login Credentials');
			}
		}
		
	}

	public function getRegister()
	{
		$title = 'LiLevre Registration Page';
		return View::make('home.register')
		->with('title', $title);
	}


	public function postRegister()
	{

		$input = Input::all();
		$rules = array('username' => 'required|unique:customer', 'email' => 'required|unique:customer|email', 
			'password' => 'required|confirmed', 
			'firstname' => 'required', 'lastname' => 'required', 'dob' => 'required');

		$v = Validator::make($input, $rules);

		if($v -> passes()){
			$password = $input['password'];
			$password = Hash::make($password);

			$customer = new Customer();
			$customer->username = $input['username'];
			$customer->firstname = $input['firstname'];
			$customer->lastname = $input['lastname'];
			$customer->dob = $input['dob'];
			$customer->email = $input['email'];
			$customer->password = $password;

			$customer->save();

			return Redirect::to('login');

		} else {
			return Redirect::to('register')				
				->withInput()
				->withErrors($v);
	
		}

	}

	public function logout(){
		echo 'kkkkkkkk';
		Auth::logout();
		return Redirect::to('/user/login');
	}


}
