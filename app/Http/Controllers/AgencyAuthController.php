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
    
    function register()
    {
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("agency.register",compact('foi'));
    }

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
            $agency->name = $data['name'];
            $agency->language = $data['language'];
            $agency->city = $data['city'];
            $agency->agency = $data['agency'];
            $encrypted_password = crypt::encrypt($data['password']);
            $agency->password = $encrypted_password;
            $agency->save();
            $req->session()->flash('error','User has been registered successfully');
            $req->session()->put('type','Agency');
            $req->session()->put('email',$data['email']);

            $myresult = DB::table('agency')->where('email',$data['email'])->get();
            $req->session()->put('id',$myresult[0]->id);
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://9op74x1ow3.execute-api.eu-central-1.amazonaws.com/dev',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
                "agencyID":"'.'Agency'.$myresult[0]->id.'",
                "AgencyName":"'.$data['name'].'",
                "AgencyInterstes":"'.$data['agency'].'",
                "AgencyEmail":"'.$data['email'].'",
                "AgencyCity":"'.$data['city'].'",
                "AgencyLanguage":"'.$data['language'].'"
            }',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $response;
            
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
