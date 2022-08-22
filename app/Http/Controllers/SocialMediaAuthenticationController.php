<?php

namespace App\Http\Controllers;

use App\Models\FacebookUser;
use App\Models\InstagramUser;
use App\Models\User;
use GuzzleHttp\Client;
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

    public function instagramLogin()
    {
        $client_id = env('INSTAGRAM_CLIENT_ID');
        $redirectUri = urlencode(env('INSTAGRAM_REDIRECT_URI'));
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$client_id}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
        // return Socialite::driver('instagram')->redirect();
    }

    public function callbackFromInstagram(Request $request)
    {
        try {
            if(empty($request->code)){
                return redirect()->route('home')->with('error', 'Failed to login with Instagram');
            }
            $client_id = env('INSTAGRAM_CLIENT_ID');
            $client_secret = env('INSTAGRAM_CLIENT_SECRET');
            $redirectUri = env('INSTAGRAM_REDIRECT_URI');

            $client = new Client();

            //Get access token
            $response = $client->request('POST', 'https://api.instagram.com/oauth/access_token', [
                'form_params' => [
                    'app_id' => $client_id,
                    'app_secret' => $client_secret,
                    'grant_type' => 'authorization_code',
                    'redirect_uri' => $redirectUri,
                    'code' => $request->code,
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
            }

            $content = $response->getBody()->getContents();
            $content = json_decode($content);

            $accessToken = $content->access_token;
            $userId = $content->user_id;

            // Get user info
            $response = $client->request('GET', "https://graph.instagram.com/me?fields=id,username,account_type&access_token={$accessToken}");

            $content = $response->getBody()->getContents();
            $oAuth = json_decode($content);

            //Saving the user information
            $save_user = InstagramUser::updateOrCreate([
                'instagram_id' => $oAuth->id,
                'username' => $oAuth->username,
                'account_type' => $oAuth->account_type
            ]);

            if($save_user){
                $media = $client->request('GET', "https://graph.instagram.com/me?fields=id,caption&access_token={$accessToken}");
                dd($media);
                return redirect()->route('welcome');
            }else {
                return redirect()->route('home');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
