<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use \Crypt;
use Hash;
use Auth;
use Session;

class InfluencerAuthController extends Controller
{
    function instagramProviderCallback(Request $req){
        $parseUrl = $_SERVER['QUERY_STRING'];
        $url=parse_str($parseUrl, $arr);
        echo $url;
        exit();
    }
}
