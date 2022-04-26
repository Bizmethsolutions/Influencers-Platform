<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use \Crypt;
use Hash;
use Auth;
use Session;

class BrandAuthController extends Controller
{
    
    function registerUser(Request $req){    
        $validateData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        $result = DB::table('brands')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        if(sizeof($res)==0){
            $data = $req->input();
            $brand = new Brand;
            $brand->email = $data['email'];
            $encrypted_password = crypt::encrypt($data['password']);
            $brand->password = $encrypted_password;
            $brand->save();
            $req->session()->flash('error','User has been registered successfully');
            $req->session()->put('type','Brand');
            $req->session()->put('email',$data['email']);
            return redirect('/brand/dashboard');
            //return redirect('/register');
        }
        else{
            $req->session()->flash('error','This Email already exists.');
            return redirect('/brand/register');
        }
    }

    function loginUser(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $result = DB::table('brands')
        ->where('email',$req->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        
        
        if(sizeof($res)==0){
            $req->session()->flash('error','Email Id does not exist. Please register yourself first');
            return redirect('/brand/login');
        }
        else{
            
            $encrypted_password = $result[0]->password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password==$req->input('password')){
                // $req->session()->put('fname',$result[0]->fname);
                $req->session()->put('type','Brand');
                $req->session()->put('email',$result[0]->email);
                $req->session()->put('id',$result[0]->id);
                $myresult = DB::table('brands')->where('email',$data['email'])->get();
                $req->session()->put('id',$myresult[0]->id);
                return redirect('/brand/dashboard');
            }
            else{
                $req->session()->flash('error','Password Incorrect!!!');
                echo "Email Id Does not Exist.";
                return redirect('/brand/login');
            }
        }
    }

    function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/brand/login');
    }
}
