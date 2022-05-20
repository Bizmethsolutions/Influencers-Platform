<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy-policy', function () { return view('privacy-policy'); });
Route::get('/terms', function () { return view('terms'); });
Route::post('register-user','App\Http\Controllers\AuthController@registerUser');
Route::post('login-user','App\Http\Controllers\AuthController@loginUser');
Route::post('influencer-register','App\Http\Controllers\InfluencerAuthController@registerUser');
Route::post('influencer-login','App\Http\Controllers\InfluencerAuthController@loginUser');
Route::post('cms-login','App\Http\Controllers\AdminAuthController@loginUser');
Route::post('brand-register','App\Http\Controllers\BrandAuthController@registerUser');
Route::post('brand-login','App\Http\Controllers\BrandAuthController@loginUser');
Route::post('agency-register','App\Http\Controllers\AgencyAuthController@registerUser');
Route::post('agency-login','App\Http\Controllers\AgencyAuthController@loginUser');
Route::get('/home', function () { return view('message');});

Route::post('/token', 'App\Http\Controllers\TokenController@generate')->name('token-generate');
//Route::get('login/instagram','App\Http\Controllers\Auth\LoginController@redirectToInstagramProvider')->name('instagram.login');



Route::get('auth/facebook', 'App\Http\Controllers\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'App\Http\Controllers\FacebookController@handleFacebookCallback');

Route::group(['middleware'=>'customAuth'],function(){
    //Agency 
    Route::get('agency/dashboard', function () { return view('agency-dashboard'); });
    Route::get('agency/search','App\Http\Controllers\AgencyController@search');
    Route::post('agency/searchQuery','App\Http\Controllers\AgencyController@searchQuery');
    Route::get('agency/create-brands','App\Http\Controllers\AgencyController@createbrands');
    Route::get('agency/edit-brands/{id}','App\Http\Controllers\AgencyController@editbrands');
    Route::get('agency/delete-brands/{id}/{name}','App\Http\Controllers\AgencyController@delete_brands');
    Route::post('agency/createBrands','App\Http\Controllers\AgencyController@create_brands');
    Route::post('agency/updateBrands','App\Http\Controllers\AgencyController@update_brands');
    Route::get('agency/list-brands','App\Http\Controllers\AgencyController@list_brands');
    Route::get('agency/profile','App\Http\Controllers\AgencyController@profile');
    Route::post('agency/profile-update','App\Http\Controllers\AgencyController@profile_update' );
    Route::get('agency/logout','App\Http\Controllers\AgencyAuthController@logout');
    Route::get('agency/chat','App\Http\Controllers\AgencyController@chat');
    Route::post('agency/create-channel','App\Http\Controllers\AgencyController@createchannel');
    Route::get('agency/agency-messages','App\Http\Controllers\AgencyController@agencymessages');
    Route::get('agency/create-campaign','App\Http\Controllers\AgencyController@createcampaign');
    // Route::post('agency/save_campaign','App\Http\Controllers\AgencyController@savecampaign');
    Route::post('agency/save_campaign','App\Http\Controllers\AgencyController@savecampaign1');
    Route::get('agency/view-campaign','App\Http\Controllers\AgencyController@viewcampaign');
    Route::get('agency/edit-campaign/{id}','App\Http\Controllers\AgencyController@editcampaign');
    Route::get('agency/delete-campaign/{id}','App\Http\Controllers\AgencyController@deletecampaign');
    Route::post('agency/update_campaign/{id}','App\Http\Controllers\AgencyController@updatecampaign');

    //Brand
    Route::get('brand/dashboard', function () { return view('brand-dashboard'); });
    Route::get('brand/logout','App\Http\Controllers\BrandAuthController@logout');
    Route::get('brand/profile','App\Http\Controllers\BrandController@profile');
    Route::post('brand/profile-update','App\Http\Controllers\BrandController@profile_update' );
    Route::get('brand/logout','App\Http\Controllers\BrandAuthController@logout');
    Route::get('brand/search','App\Http\Controllers\BrandController@search');
    Route::post('brand/searchQuery','App\Http\Controllers\BrandController@searchQuery');
    Route::get('brand/chat','App\Http\Controllers\BrandController@chat');
    Route::post('brand/create-channel','App\Http\Controllers\BrandController@createchannel');
    Route::get('brand/brand-messages','App\Http\Controllers\BrandController@brandmessages');
    Route::get('brand/create-campaign','App\Http\Controllers\BrandController@createcampaign');
    Route::post('brand/save_campaign','App\Http\Controllers\BrandController@savecampaign1');
    Route::get('brand/view-campaign','App\Http\Controllers\BrandController@viewcampaign');
    Route::get('brand/edit-campaign/{id}','App\Http\Controllers\BrandController@editcampaign');
    Route::get('brand/delete-campaign/{id}','App\Http\Controllers\BrandController@deletecampaign');
    Route::post('brand/update_campaign/{id}','App\Http\Controllers\BrandController@updatecampaign');

    

    //Influencer
    Route::get('influencer/dashboard', function () { return view('influencer/influencer-dashboard'); });
    Route::get('influencer/profile','App\Http\Controllers\InfluencerController@profile' );
    Route::post('influencer/profile-update','App\Http\Controllers\InfluencerController@profile_update' );
    Route::get('influencer/logout','App\Http\Controllers\InfluencerAuthController@logout');
    Route::get('influencer/connect-to-instagram', 'App\Http\Controllers\InfluencerAuthController@cti');
    Route::get('influencer/callback-instagram', 'App\Http\Controllers\InfluencerAuthController@instagramProviderCallback');
    Route::get('influencer/followers', 'App\Http\Controllers\InfluencerController@instagramFollower');
    Route::get('influencer/chat','App\Http\Controllers\InfluencerController@chat');
    Route::post('influencer/create-channel','App\Http\Controllers\InfluencerController@createchannel');
    Route::get('influencer/influencer-messages','App\Http\Controllers\InfluencerController@influencermessages');
    Route::get('influencer/view-campaign','App\Http\Controllers\InfluencerController@viewcampaign');
    Route::post('influencer/accept-invitation','App\Http\Controllers\InfluencerController@acceptinvitation');
    Route::post('influencer/decline-invitation','App\Http\Controllers\InfluencerController@declineinvitation');
});


Route::group(['middleware'=>'adminAuth'],function(){
    Route::get('cms/dashboard', function () { return view('dashboard'); });
    Route::get('cms/logout','App\Http\Controllers\AuthController@logout');
});

Route::group(['middleware'=>'sessionCheck'],function(){
    Route::get('/', function (){
        return view('auth.login');
    });

    Route::get('cms', function (){
        return view('auth.admin-login');
    });



    // Brand Route
    Route::get('brand/login', function () { return view('brand.login'); });
    Route::get('brand/register', function () { return view('brand.register'); });


    // Brand Route
    Route::get('agency/login', function () { return view('agency.login'); });
    Route::get('agency/register', 'App\Http\Controllers\AgencyAuthController@register');

    // Influencer Route
    Route::get('influencer/login', function () { return view('influencer.login'); });
    Route::get('influencer/register', 'App\Http\Controllers\InfluencerAuthController@register');


    Route::get('forgot', function () { return view('auth.forgot'); });
    Route::get('forgot-success', function () { return view('auth.forgot-success'); });
});