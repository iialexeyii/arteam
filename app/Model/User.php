<?php 
namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'users';
	protected $fillable = ['name', 'email', 'password'];
	protected $hidden = ['password', 'remember_token'];
	public static $unguarded = true;


	public static function register($data)
	{
		try {
			$user = User::create([
				"username" => $data["username"],
				"fullname" => $data["fullname"],
				"email" => $data["email"],
				"password" => Hash::make($data["password"]),
				"address" => $data["address"],
				"city" => $data["city"],
				"country" => $data["country"],
			]);
		} catch (Exception $e) {
			return $e;
		}

		return $user;
	}

	public static function getUnique($mail,$col)
	{
		try {
			return User::where($col, '=', $mail)->firstOrFail();
		} catch (ModelNotFoundException $e) {
			return $e;
		}
		
	}


}
