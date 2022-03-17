<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
            
            if($finduser){
         
                Auth::login($finduser);
                
                session()->put('type','Influencer');
                session()->put('name',$user->name);
                session()->put('email',$user->email);
                session()->put('facebook_id',$user->id);
                return redirect('/influencer/dashboard');
         
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
        
                Auth::login($newUser);
        
              
                session()->put('type','Influencer');
                session()->put('email',$user->email);
                session()->put('facebook_id',$user->id);
                return redirect('/influencer/dashboard');
            }
        
        } catch (Exception $e) {
            
            dd($e->getMessage());
        }
    }
}