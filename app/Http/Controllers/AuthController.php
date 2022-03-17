<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use \Crypt;
use Hash;
use Auth;
use Session;

class AuthController extends Controller
{
    function registerUser(Request $req){
        
        $validateData = $req->validate([
            'fname' => 'required|regex:/^[a-z A-Z]+$/u',
            'lname' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        $result = DB::table('users')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        
        
        if(sizeof($res)==0){
            $data = $req->input();
            $user = new User;
            $user->fname = $data['fname'];
            $user->lname = $data['lname'];
            $user->email = $data['email'];
            $encrypted_password = crypt::encrypt($data['password']);
            $user->password = $encrypted_password;
            $user->save();
            $req->session()->flash('register_status','User has been registered successfully');
            $req->session()->put('fname',$data['fname']);
            $req->session()->put('lname',$data['lname']);
            $req->session()->put('email',$data['email']);
            return redirect('/dashboard');
            //return redirect('/register');
        }
        else{
            $req->session()->flash('register_status','This Email already exists.');
            return redirect('/register');
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
            return redirect('login');
        }
        else{
            
            $encrypted_password = $result[0]->password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password==$req->input('password')){
                $req->session()->put('fname',$result[0]->fname);
                $req->session()->put('lname',$result[0]->lname);
                $req->session()->put('email',$result[0]->email);
                $req->session()->put('id',$result[0]->id);
                return redirect('/dashboard');
            }
            else{
                $req->session()->flash('error','Password Incorrect!!!');
                echo "Email Id Does not Exist.";
                return redirect('login');
            }
        }
    }

    function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
