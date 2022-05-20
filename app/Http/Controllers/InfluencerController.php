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
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\ChatGrant;
use Twilio\Rest\Client;


class InfluencerController extends Controller
{
    function profile(Request $request){
        $pro = $request->session()->all();
        $data = DB::table('users')->where('email',$pro['email'])->first();
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("influencer.profile",compact('foi','data'));
    }

    function chat(Request $request){
        $pro = $request->session()->all();
        $users = DB::table('brands')->get();
        $agency = DB::table('agency')->get();
        return view("influencer-chat",compact('users','agency'));
    }

    function createchannel(Request $request){
        $token=$request->input('_token');
        $channel_name=$request->input('channame');
        $username=$request->input('username');
        $email=$request->input('email');
        $emailuser=$request->input('email_user');
        
        $twilio = new Client(env('TWILIO_AUTH_SID'), env('TWILIO_AUTH_TOKEN'));

        // Fetch channel or create a new one if it doesn't exist
        try {
                $channel = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->fetch();
        } catch (\Twilio\Exceptions\RestException $e) {
                $channel = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels
                        ->create([
                                'uniqueName' => $channel_name,
                                'friendlyName' => $channel_name,
                                'type' => 'public',
                        ]);
        }

        // Add first user to the channel
        try {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members($email)
                        ->fetch();

        } catch (\Twilio\Exceptions\RestException $e) {
                $member = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members
                        ->create($email);
        }

        // Add second user to the channel
        try {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members($emailuser)
                        ->fetch();

        } catch (\Twilio\Exceptions\RestException $e) {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members
                        ->create($emailuser);
        }
        $users = DB::table('users')->get();
        $request->session()->put('chat',$channel_name);
        return redirect('influencer/influencer-messages');
    }


    function influencermessages(Request $request){
      $pro = $request->session()->all();
      $name=$pro['name'];
      $token=csrf_token();
      $chat=$pro['chat'];
      
      return view("influencer-messages",compact('name','token','chat'));
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
        $mobile = $request->input('mobile');
        $foi = implode(',', $foi);
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://qtgtxdk5f8.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "InfluencerID":"Influencer'.$pro['id'].'",
            "InfluencerGender":"'.$gender.'",
            "InfluencerFollowers":"'.$followers.'",
            "InfluencerInterstes":"'.$foi.'",
            "InfluencerAge":"'.$age.'",
            "InfluencerInstaID":"",
            "InfluencerBrands":"'.$brands.'",
            "InfluencerEMAIL":"'.$pro['email'].'",
            "InfluencerFullName":"'.$name.'",
            "InfluencerCity":"'.$city.'",
            "InfluencerNumber":"'.$mobile.'",
            "InfluencerLanguage":"'.$language.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        
        $data= array('name' => $name,'location' => $location,'gender'=>$gender,'age'=>$age,'foi'=>$foi,'followers'=>$followers,'brands'=>$brands,'language'=>$language,'city'=>$city,'mobile'=>$mobile);
        DB::table('users')->where('email', $pro['email'])->update($data);
        return redirect('/influencer/profile')->with('success', 'Profile updated successfully');
    }

    function viewcampaign(Request $request)
    {
        $pro = $request->session()->all();
        $email=$pro['email'];
        $array=array($pro['email']);
       
        
       
        $campaign = DB::table('campaign')->where('type','Public')->get();
        
        $campaign1 = DB::table('campaign')->where('type','Private')->whereRaw('FIND_IN_SET("'.$email.'",`list_influencer`)')->get();

       
        return view("influencer.view-campaign",compact('campaign','campaign1','pro'));
    }
    function acceptinvitation(Request $request){
        $pro = $request->session()->all();
        $values = array('campaign_id' => $request->campaign_id,'influencer_id' => $request->influencer_id,'status' => $request->status);
        $insert=DB::table('campaign_invitation')->insert($values);
        return redirect('/influencer/view-campaign')->with('success', 'Data updated successfully');
    }
    function declinetinvitation(Request $request){
        $pro = $request->session()->all();
        $values = array('campaign_id' => $request->campaign_id,'influencer_id' => $request->influencer_id,'status' => $request->status);
        $insert=DB::table('campaign_invitation')->insert($values);
        return redirect('/influencer/view-campaign')->with('success', 'Data updated successfully');

    }
}
