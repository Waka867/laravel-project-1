<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Utilize User class from user.php in the App namespace
use \App\User;

class ProfilesController extends Controller
{
  public function index( $user )
  {
      $user = User::find($user);

      //dd($user);

      return view('home', [
        'user' => $user
      ]);

  }
}
