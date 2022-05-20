<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Brand;
use \Crypt;
use Hash;
use Auth;
use Session;
use File; // i have included this before class
use Storage; // i have included this before class


class AgencyController extends Controller
{
    function profile(Request $request){
        $pro = $request->session()->all();
        $data = DB::table('agency')->where('email',$pro['email'])->first();
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("agency.profile",compact('foi','data'));
    }

    function createbrands(){
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("agency.create",compact('foi'));
    }

    function editbrands($id){
        $brands = DB::table('brands')->where('id',$id)->first();
        $foi = DB::table('field_of_interest')->orderBy('name', 'ASC')->get();
        return view("agency.edit",compact('foi','brands'));
    }


    function update_brands(Request $request){
        $pro = $request->session()->all();
        $name = $request->input('name');
        $brand_type = $request->input('brand_type');
        $city = $request->input('city');
        $agency = $request->input('agency');
        $language = $request->input('language');
        $email = $request->input('email');
        $data= array('name' => $name,'brand_type' => $brand_type,'language'=>$language,'city'=>$city,'agency'=>$agency);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://r0eqy06qfi.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "event_type"      : "update_brand_in_agency_protfolio",
            "agencyID"        : "Agency'.$pro['id'].'",
            "BrandName"       : "'.$name.'",
            "BrandLanguage"   : "'.$language.'",
            "BrandCity"       : "'.$city.'",
            "BrandType"       : "'.$brand_type.'",
            "BrandEmail"      : "'.$email.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        DB::table('brands')->where('id', $request->input('id'))->update($data);
        return redirect('/agency/list-brands')->with('success', 'Data updated successfully');
    }

    function profile_update(Request $request){
        $pro = $request->session()->all();
        $name = $request->input('name');
        $city = $request->input('city');
        $agency = $request->input('agency');
        $language = $request->input('language');
        $data= array('name' => $name,'language'=>$language,'city'=>$city,'agency'=>$agency);
        DB::table('agency')->where('email', $pro['email'])->update($data);
        
        return redirect('/agency/profile')->with('success', 'Profile updated successfully');
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
      return view("agency.search",compact('list','foi','city','language'));
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
    
    function create_brands(Request $request){
        $validateData = $request->validate([
            'email'       => 'required|email',
            'name'        => 'required',
            'brand_type'  => 'required',
            'language'    => 'required',
            'city'        => 'required',
            'agency'      => 'required',
        ]);
        $result = DB::table('brands')
        ->where('email',$request->input('email'))
        ->get();
        
        $res = json_decode($result,true);
        if(sizeof($res)==0){
            $pro = $request->session()->all();
            $datas = DB::table('agency')->where('email',$pro['email'])->first();
            $data = $request->input();
            $agency = new Brand;
            $agency->email = $data['email'];
            $agency->name = $data['name'];
            $agency->brand_type = $data['brand_type'];
            $agency->language = $data['language'];
            $agency->city = $data['city'];
            $encrypted_password = crypt::encrypt('123456');
            $agency->password = $encrypted_password;
            $agency->agency_id = $datas->id;
            $agency->save();
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://r0eqy06qfi.execute-api.eu-central-1.amazonaws.com/dev',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
                "event_type"      : "add_brand_to_agency_protfolio",
                "agencyID"        : "Agency'.$pro['id'].'",
                "BrandName"       : "'.$data['name'].'",
                "BrandLanguage"   : "'.$data['language'].'",
                "BrandCity"       : "'.$data['city'].'",
                "BrandType"       : "'.$data['brand_type'].'",
                "BrandEmail"      : "'.$data['email'].'"
            }',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));

            $response = curl_exec($curl);
            //print_r($response);
            curl_close($curl);
            $request->session()->flash('success','Brand saved successfully');
            return redirect('/agency/create-brands'); 
        }
        else{
            $request->session()->flash('error','This Email id is already exists.');
            return redirect('/agency/create-brands');
        }
    }

    function delete_brands($id,$name,Request $request){
      $pro = $request->session()->all();
      $finalResult = DB::table('brands')->where('id', $id)->delete();
      if($finalResult){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://r0eqy06qfi.execute-api.eu-central-1.amazonaws.com/dev',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "event_type"      : "remove_brand_from_agency_protfolio",
            "agencyID"        : "Agency'.$pro['id'].'",
            "BrandName"       : "'.$name.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);
        //print_r($response);
        curl_close($curl);
      }

      $request->session()->flash('success','Brand deleted successfully');
      return redirect('/agency/list-brands'); 
        
    }
    
    function list_brands(Request $request){
        $pro = $request->session()->all();
        $datas = DB::table('agency')->where('email',$pro['email'])->first();
        $data = DB::table('brands')->where('agency_id',$datas->id)->get();
        return view("agency.list-brands",compact('data'));
    }
}
