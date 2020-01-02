<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Utilize User class from user.php in the App namespace
use \App\User;

class ProfilesController extends Controller
{
	public function index( $user )
	{
   
		//$user = User::find($user);
		// findOrFail gracefully brings user to 404 page if something goes wrong. Only user the other find option for debugging.
		$user = User::findOrFail($user);

      		//dd($user);

      		return view('profiles.index', [
        	'user' => $user
		
	]);

  }
}
