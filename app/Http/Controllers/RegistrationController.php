<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use App\Mail\WelcomeAgain;
use App\Notifications\verifyEmail;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('register.create');
    }

    public function store() {
       // return redirect('/');

    	$this->validate(request(), [
         'fname' => 'required|min:2',
         'lname' => 'required|min:2',
         'email' => 'required|email|unique:users',
         'address' => 'required|max:255',
         'phone' => 'required|min:9',
         'password' => 'required|confirmed'
    	]);

    	if($user = User::create( [
         'fname' => request('fname'),
         'lname' => request('lname'),
         'email' => request('email'),
         'address' => request('address'),
         'phone' => request('phone'),
         'token' => str_random(25),
         'password' => bcrypt(request('password'))
    	]))
      {
        auth()->login($user);

        \Mail::to($user)->send(new WelcomeAgain($user));

        $user->notify(new verifyEmail($user));

        return redirect('/profile')->with('message', 'Account created Successfully ');  
    }
        else  {
            return back()->with('message', 'Incorrect  credentials . ');
        }

    }
}
