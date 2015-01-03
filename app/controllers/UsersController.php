<?php

class UsersController extends \BaseController {

	protected $layout2 = 'layouts.admin';
	protected $layout = 'layouts.fontend';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index')->with('users');
	}

/*
*Show Login Page
*/
	public function ShowLogin(){
			if (Auth::check()) {
				return Redirect::to('dashboard')->with('Message ', 'You are successfully Logedin ');
			}
		return View::make('users.login');
	}
/**
*Do login
*
*/

	public function DoLogin(){

		$uData = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);

		$rules = array(
			'username' => 'required',
			'password'=> 'required'
			);
		$validator = Validator::make($uData, $rules);

		if ($validator->Passes()) {
			if (Auth::attempt($uData)) {
				
				return Redirect::to('dashboard')->with('message','You have successfully Logedin');
			}else{
				return Redirect::to('login')->withErrors(array('password'=>'Your Username or Password is not match'))->withInput(Input::except('password'));
			}
			
		}

		var_dump($uData); die();

		return "Hello world";
	}

/**
*Register4
*
*/

	public function Register(){

		return View::make('users.register');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		        // validate
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email|unique:users',
            'username' => 'required',
            'password' =>'required|min:6'
        );
        $validator = Validator::make(Input::all(), $rules);

        #var_dump(Input::all() ); die();

        // process the login
        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name       	= Input::get('name');
            $user->email      	= Input::get('email');
            $user->username 	= Input::get('username');
            $user->password 	= Hash::make(Input::get('password'));
            $user->remember_token = Input::get('_token');

            #var_dump($user); die();
            $user->save();

            // redirect
            Session::flash('message', 'Successfully Registered!');
            return Redirect::to('login');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * User Dahsboard Admin
	 */
	public function dashboard(){

		$user = Auth::user();
		
		return View::make('users.dashboard')->with('users',$user);
	}


	/**
	*Logout functions
	*/
	public function logout(){
		Auth::logout();

		return Redirect::to('login')->with('message','You have successfully loged out');
	}


	/**
	*Logout functions
	*/
	public function profile(){

		$this->layout2->content = View::make('users.profile');
	}



}
