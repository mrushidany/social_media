<?php

namespace App\Http\Controllers;

use App\Models\FacebookUser;
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
            if($save_user->id){
                $save_facebook_user = FacebookUser::updateOrCreate([
                    'user_id' => $save_user->id,
                    'facebook_id' => $user->id
                ]);
            }
            if($save_facebook_user){
                return redirect()->route('welcome');
            }else {
                return redirect()->route('home');
            }
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

    public function instagramLogin()
    {
        $appId = '766872407700284';
        $redirectUri = urlencode('http://localhost:8000/instagram/callback');
        return redirect()->to('https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile&response_type=code');
        // return Socialite::driver('instagram')->redirect();
    }

    public function callbackFromInstagram(Request $request)
    {
        dd($request->code);
        try {
            $user = Socialite::driver('instagram')->stateless()->user();

            dd($user);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
