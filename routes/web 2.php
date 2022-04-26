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

//Route::get('login/instagram','App\Http\Controllers\Auth\LoginController@redirectToInstagramProvider')->name('instagram.login');



Route::get('auth/facebook', 'App\Http\Controllers\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'App\Http\Controllers\FacebookController@handleFacebookCallback');

Route::group(['middleware'=>'customAuth'],function(){
    //Agency 
    Route::get('agency/dashboard', function () { return view('agency-dashboard'); });
    Route::get('agency/search','App\Http\Controllers\AgencyController@search');
    Route::post('agency/searchQuery','App\Http\Controllers\AgencyController@searchQuery');
    Route::get('agency/create-brands',function () { return view('agency.create'); });
    Route::post('agency/createBrands','App\Http\Controllers\AgencyController@create_brands');
    Route::get('agency/list-brands','App\Http\Controllers\AgencyController@list_brands');

    //Brand
    Route::get('brand/dashboard', function () { return view('brand-dashboard'); });
    Route::get('brand/logout','App\Http\Controllers\BrandAuthController@logout');
    Route::get('brand/profile','App\Http\Controllers\BrandController@profile');
    Route::post('brand/profile-update','App\Http\Controllers\BrandController@profile_update' );
    Route::get('brand/logout','App\Http\Controllers\BrandAuthController@logout');
    Route::get('brand/search','App\Http\Controllers\BrandController@search');
    Route::post('brand/searchQuery','App\Http\Controllers\BrandController@searchQuery');

    //Influencer
    Route::get('influencer/dashboard', function () { return view('influencer/influencer-dashboard'); });
    Route::get('influencer/profile','App\Http\Controllers\InfluencerController@profile' );
    Route::post('influencer/profile-update','App\Http\Controllers\InfluencerController@profile_update' );
    Route::get('influencer/logout','App\Http\Controllers\InfluencerAuthController@logout');
    Route::get('influencer/connect-to-instagram', 'App\Http\Controllers\InfluencerAuthController@cti');
    Route::get('influencer/callback-instagram', 'App\Http\Controllers\InfluencerAuthController@instagramProviderCallback');
    Route::get('influencer/followers', 'App\Http\Controllers\InfluencerController@instagramFollower');
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
    Route::get('agency/register', function () { return view('agency.register'); });

    // Influencer Route
    Route::get('influencer/login', function () { return view('influencer.login'); });
    Route::get('influencer/register', 'App\Http\Controllers\InfluencerAuthController@register');


    Route::get('forgot', function () { return view('auth.forgot'); });
    Route::get('forgot-success', function () { return view('auth.forgot-success'); });
});