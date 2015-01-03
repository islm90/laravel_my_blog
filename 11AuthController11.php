<?php 
/**
* Login Form 
*/
class AuthController extends BaseController{

	public function index(){
		$users = User::all();

		return View::make('auth.index')->with('users')
	}
	
	public function ShowLogin(){
		if (Auth::check()) {
			return Redirect::to('')->with('Message ', 'You are successfully Logedin ');
		}
	return View::make('auth.login');
	}



	public function DoLogin(){


	}

	public function add(){

	}
}
 ?>