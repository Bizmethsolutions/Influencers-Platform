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


class BrandController extends Controller
{
    function profile(Request $request){
        $pro = $request->session()->all();
        $data = DB::table('brands')->where('email',$pro['email'])->first();
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("brand.profile",compact('foi','data'));
    }

    function profile_update(Request $request){
        $pro = $request->session()->all();
        $name = $request->input('name');
        $brand_type = $request->input('brand_type');
        $city = $request->input('city');
        $agency = $request->input('agency');
        $language = $request->input('language');
        $data= array('name' => $name,'brand_type' => $brand_type,'language'=>$language,'city'=>$city,'agency'=>$agency);
        DB::table('brands')->where('email', $pro['email'])->update($data);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://o6zw8vqdpd.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "BrandName":"'.$name.'",
            "BrandType":"'.$brand_type.'",
            "BrandLanguage":"'.$language.'",
            "BrandCity":"'.$city.'",
            "BrandAgency":"'.$agency.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
        return redirect('/brand/profile')->with('success', 'Profile updated successfully');
    }

    function search(){
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://yse94bnmm8.execute-api.eu-central-1.amazonaws.com/dev',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      $json=json_decode($response, true);
      $list=array();
      foreach($json['list_influencers'] as $value){
        $list[]=$value;
      }
      $city = DB::table('users')->orderBy('city', 'ASC')->get();
      $language = DB::table('users')->orderBy('language', 'ASC')->get();
      $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
      return view("brand.search",compact('list','foi','city','language'));
    }

    function searchQuery(Request $request){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://yse94bnmm8.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $json=json_decode($response, true);
        
        foreach($json['list_influencers'] as $value){
          ?>
          <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
            <div class="card custom-card p-0">
              <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
              <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
              <ul class="card-social">
                <li><a href="#"><img src="../assets/images/facebook.png" style="width:24px;"></a></li>
                
                <li><a href="#"><img src="../assets/images/instagram.png" style="width:24px;"></a></li>
                
              </ul>
              <div class="text-center profile-details">
                <h5>{{ $value }}</h5>
                <h6>Influencer</h6>
              </div>
              <div class="card-footer row">
                <div class="col-4 col-sm-4">
                  <h6>Follower</h6>
                  <h5 class="counter">9564</h5>
                </div>
                <div class="col-4 col-sm-4">
                  <h6>Following</h6>
                  <h5><span class="counter">49</span>K</h5>
                </div>
                <div class="col-4 col-sm-4">
                  <h6>Total Post</h6>
                  <h5><span class="counter">96</span>M</h5>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
    }
}
