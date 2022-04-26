<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use \Crypt;
use Hash;
use Auth;
use Session;

class InfluencerAuthController extends Controller
{
    function registerUser(Request $req){    
        $validateData = $req->validate([
            'name'     => 'required|min:3|max:35',
            'email'    => 'required|email',
            'location' => 'required',
            'age'      => 'required',
            'gender'      => 'required',
            'foi'      => 'required|array',
            'password' => 'required|min:3|max:20',
    		// 'cpassword' => 'required|min:3|max:20|same:password',
        ]);
        $result = DB::table('users')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        if(sizeof($res)==0){
            $data = $req->input();
            $foi = implode(', ', $data['foi']);
            $influencer = new User;
            $influencer->name = $data['name'];
            $influencer->location = $data['location'];
            $influencer->age = $data['age'];
            $influencer->gender = $data['gender'];
            $influencer->foi = $foi;
            $influencer->email = $data['email'];
            $encrypted_password = crypt::encrypt($data['password']);
            $influencer->password = $encrypted_password;
            $influencer->save();
            $req->session()->flash('error','User has been registered successfully');
            $req->session()->put('type','Influencer');
            $req->session()->put('email',$data['email']);
            $req->session()->put('name',$data['name']);
            return redirect('/influencer/dashboard');
            //return redirect('/register');
        }
        else{
            $req->session()->flash('error','This Email already exists.');
            return redirect('/influencer/register');
        }
    }

    function loginUser(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $result = DB::table('users')
        ->where('email',$req->input('email'))
        ->get();
        $res = json_decode($result,true);
        if(sizeof($res)==0){
            $req->session()->flash('error','Email Id does not exist. Please register yourself first');
            return redirect('/influencer/login');
        }
        else{
            $encrypted_password = $result[0]->password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password==$req->input('password')){
                $req->session()->put('type','Influencer');
                $req->session()->put('email',$result[0]->email);
                $req->session()->put('name',$result[0]->name);
                $req->session()->put('id',$result[0]->id);
                return redirect('/influencer/dashboard');
            }
            else{
                $req->session()->flash('error','Password Incorrect!!!');
                //echo "Email Id Does not Exist.";
                return redirect('/influencer/login');
            }
        }
    }

    function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/influencer/login');
    }

    function cti(){
        $clientid=env('INSTAGRAM_CLIENT_ID', 'default_value');
        $url=env('INSTAGRAM_REDIRECT_URI', 'default_value');

        return redirect('https://api.instagram.com/oauth/authorize?client_id='.$clientid.'&redirect_uri='.$url.'&scope=user_profile,user_media&response_type=code');
        
    }

    function instagramProviderCallback(Request $req){
        $parseUrl = $_SERVER['QUERY_STRING'];
        $url=parse_str($parseUrl, $arr);
        
        if(!empty($arr['code'])){
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.instagram.com/oauth/access_token');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            $post = array(
                'client_id' => env('INSTAGRAM_CLIENT_ID', 'default_value'),
                'client_secret' => env('INSTAGRAM_CLIENT_SECRET', 'default_value'),
                'grant_type' => 'authorization_code',
                'redirect_uri' => env('INSTAGRAM_REDIRECT_URI', 'default_value'),
                'code' => $arr['code']
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            $json = json_decode($result, true);
            $json['access_token'];
            $json['user_id'];


            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, 'https://graph.instagram.com/v11.0/'.$json['user_id'].'?fields=username,name,media_count&access_token='.$json['access_token']);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
            $result1 = curl_exec($ch1);
            if (curl_errno($ch1)) {
                echo 'Error:' . curl_error($ch1);
            }
            curl_close($ch1);
            $json1 = json_decode($result1, true);
            print_r($json1);

            //echo 'https://graph.facebook.com/v11.0/'.$json['user_id'].'/insights?metric=impressions,reach,profile_views&period=day&access_token='.$json['access_token'];
            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL, 'https://api.instagram.com/v1/users/'.$json['user_id'].'/follows?&access_token='.$json['access_token']);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
            $result2 = curl_exec($ch2);
            if (curl_errno($ch2)) {
                echo 'Error:' . curl_error($ch2);
            }
            curl_close($ch2);
            $json2 = json_decode($result2, true);
            print_r($json2);


            

        }
        // return redirect('/influencer/dashboard');
    }

    function register(){
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("influencer.register",compact('foi'));
    }
}
