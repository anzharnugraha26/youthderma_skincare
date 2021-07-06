<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $duplicate = User::where('email', $user->email)->first();
        $find = User::where('google_id', $user->getId())->first();
        if($duplicate){
            Auth::login($duplicate);
            return redirect('/shop')->with('login', 'zz');
        }else{
        if ($find) {
            Auth::login($find);
            return redirect('/shop')->with('with','aa');
        } else{
             $new = User::create([
                     'name' => $user->name,
                     'email' => $user->email,
                     'google_id' => $user->id,
                     'password' => bcrypt('${1:my-secret-password')
            ]);
            $new->markEmailAsVerified();
            Auth::login($new);
            return redirect('/shop')->with('with','aa');
        }
        }
     }

}
