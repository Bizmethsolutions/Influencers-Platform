<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use \Crypt;
use Hash;
use Auth;
use Session;
use File; // i have included this before class
use Storage; // i have included this before class


class InfluencerController extends Controller
{
    function profile(Request $request){
        $pro = $request->session()->all();
        $data = DB::table('users')->where('email',$pro['email'])->first();
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("influencer.profile",compact('foi','data'));
    }
    
    function instagramFollower(Request $request)
    {
        $pro = $request->session()->all();
        $data = DB::table('users')->where('email',$pro['email'])->first();
        $url = 'https://api.instagram.com/v1/users/'.$data->instagram_user_id.'/?access_token='.$data->instagram_access_token;
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        $content = (string) $res->getBody();
        print_r($content);
    }

    function profile_update(Request $request){
        $pro = $request->session()->all();
        // print_r($pro);
        // exit();
        $name = $request->input('name');
        $location = $request->input('location');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $foi = $request->input('foi');
        $brands = $request->input('brands');
        $followers = $request->input('followers');
        $language = $request->input('language');
        $city = $request->input('city');
        $foi = implode(',', $foi);
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://kg5wc8lpab.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "InfluencerID":"'.$name.'",
            "InfluencerGender":"'.$gender.'",
            "InfluencerFollowers":"'.$followers.'",
            "InfluencerInterstes":"'.$foi.'",
            "InfluencerBrands":"'.$brands.'",
            "InfluencerEMAIL":"'.$pro['email'].'",
            "InfluencerFullName":"'.$name.'",
            "InfluencerCity":"'.$city.'",
            "InfluencerLanguage":"'.$language.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        
        $data= array('name' => $name,'location' => $location,'gender'=>$gender,'age'=>$age,'foi'=>$foi,'followers'=>$followers,'brands'=>$brands,'language'=>$language,'city'=>$city);
        DB::table('users')->where('email', $pro['email'])->update($data);
        return redirect('/influencer/profile')->with('success', 'Profile updated successfully');
    }
}
