<?php 
namespace App\Http\Controllers;

use App\Model\User;
use Input;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Auth;

class LoginController extends Controller {



	public function loginScreen()
	{
		
		//Debugbar::info(Auth::user());
		return view('login', array());
	}

	public function login()
	{
		$get = Input::get();
		$get["remember"] = (isset($get["remember"])) ? 1 : 0 ;
		//\Debugbar::info($get["remember"]);
		//return 1;
		 if (Auth::attempt([
		 		"username" => $get["username"],
		 		"password" => $get["password"]
		 	],$get["remember"]))
        {
            return redirect("/");
        }
		
	}

	public function logout()
	{
		Auth::logout();
		return redirect("/");
	}

	public function newuser()
	{
		$input = Input::get();

		$user = User::register($input);

		if ($user instanceof Exeption) {
			view('501');
		}else{
			Auth::login($user);
		}
		//Redirect::to('/');
		return $user;
	}

	public function uniquemailtest()
	{
		$mail = Input::get('email');
		if (!$mail) {
			return "false";
		}
		if (User::getUnique($mail,"email") instanceof ModelNotFoundException){
			return "false";
		}
		return "true";
	}
	public function uniqulogintest()
	{
		$username = Input::get('username');
		if (!$username) {
			return "false";
		}
		if (User::getUnique($username,"username") instanceof ModelNotFoundException){
			return "false";
		}
		return "true";
	}

}
