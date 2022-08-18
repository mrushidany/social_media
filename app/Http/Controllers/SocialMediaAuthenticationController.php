<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialMediaAuthenticationController extends Controller
{

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();
            $save_user = User::updateOrCreate([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function twitterLogin()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function callbackFromTwitter(Request $request)
    {
        try {
            $user = Socialite::driver('twitter')->email;

            dd($user);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
