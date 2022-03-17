<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\QBO;
use Hash;
use Session;
use QuickBooksOnline\API\DataService\DataService;

class QBOController extends Controller
{
        function connectQBO(Request $req){
                $dataService = DataService::Configure(array(
                        'auth_mode' => 'oauth2',
                        'ClientID' => config('QBO.client_id'),
                        'ClientSecret' =>  config('QBO.client_secret'),
                        'RedirectURI' => config('QBO.oauth_redirect_uri'),
                        'scope' => config('QBO.oauth_scope'),
                        'baseUrl' => "development"
                ));
                $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
                // Get the Authorization URL from the SDK
                $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
                return redirect($authUrl);
        }

        
        function authorizeQBO(Request $req)
        {
                $dataService = DataService::Configure(array(
                        'auth_mode' => 'oauth2',
                        'ClientID' => config('QBO.client_id'),
                        'ClientSecret' =>  config('QBO.client_secret'),
                        'RedirectURI' => config('QBO.oauth_redirect_uri'),
                        'scope' => config('QBO.oauth_scope'),
                        'baseUrl' => "development"
                ));

                $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
                $parseUrl = $_SERVER['QUERY_STRING'];
                parse_str($parseUrl, $arr);
                /*
                * Update the OAuth2Token
                */
                //echo $arr['code'];
                $accessToken =    $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($arr['code'], $arr['realmId']);
                $dataService->updateOAuth2Token($accessToken);

                /*
                * Setting the accessToken for session variable
                */
                $req->session()->put('accessToken',$accessToken);
                //Session::set('accessToken', $accessToken);
                return redirect('/companyinfo');
        }
}