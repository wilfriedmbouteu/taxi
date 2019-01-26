<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SessionsController extends Controller
{
    //
protected $redirectTo = '/';

    

    public function create()
    {
      return view('login.create');
    }

    public function store()
    {
    	if(! auth()->attempt(request(['email', 'password'])))
        {  
           return back()->with('message', 'Either Email or Password is incorrect');
        }
           else
          
          return redirect('/');
    }
    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }

    

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $user->name, 
            'email' => $user->email, 
            'password' => bcrypt(request('password')),
            'provider' => strtoupper($provider),
            'provider_id' => $user->id
        ]);
    }
}
