<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agency;
use \Crypt;
use Hash;
use Auth;
use Session;

class AgencyAuthController extends Controller
{
    
    function registerUser(Request $req){    
        $validateData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        $result = DB::table('agency')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        if(sizeof($res)==0){
            $data = $req->input();
            $agency = new Agency;
            $agency->email = $data['email'];
            $encrypted_password = crypt::encrypt($data['password']);
            $agency->password = $encrypted_password;
            $agency->save();
            $req->session()->flash('error','User has been registered successfully');
            $req->session()->put('type','Agency');
            $req->session()->put('email',$data['email']);
            return redirect('/agency/dashboard');
            //return redirect('/register');
        }
        else{
            $req->session()->flash('error','This Email already exists.');
            return redirect('/agency/register');
        }
    }

    function loginUser(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $result = DB::table('agency')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        
        
        if(sizeof($res)==0){
            $req->session()->flash('error','Email Id does not exist. Please register yourself first');
            return redirect('/agency/login');
        }
        else{
            
            $encrypted_password = $result[0]->password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password==$req->input('password')){
                // $req->session()->put('fname',$result[0]->fname);
                $req->session()->put('type','Agency');
                $req->session()->put('email',$result[0]->email);
                $req->session()->put('id',$result[0]->id);
                return redirect('/agency/dashboard');
            }
            else{
                $req->session()->flash('error','Password Incorrect!!!');
                echo "Email Id Does not Exist.";
                return redirect('/agency/login');
            }
        }
    }

    function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/agency/login');
    }
}
