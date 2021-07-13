<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\MainController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
//Register Routes....
Route::get('/register-seller', function () {
    return view('auth.registerseller');
});
Route::post('register-seller','Auth\RegisterController@createSeller');
Route::post('/register-client','Auth\RegisterController@createClient');
//Seller Routes......
Route::get('/seller-main/{status}', 'Seller\MainController@sellermain');
Route::get('/seller-add-trade', 'Seller\MainController@addTrede');
Route::post('/seller-add-trade','Seller\MainController@createTrade');
Route::get('/seller-edit-trade/{id}', 'Seller\MainController@editTrade');
Route::post('/seller-edit-trade','Seller\MainController@updateTrade');
Route::post('/seller-main/{status}','Seller\MainController@deleteTrade');
Route::get('/seller-analytics', 'Seller\MainController@analyticsTrade');
Route::get('/seller-edit', 'Seller\MainController@editSeller');
Route::post('/seller-edit', 'Seller\MainController@updateSeller');
Route::get('/seller-trade-details/{id}', 'Seller\MainController@detailsTrade');
//Client Routes......
Route::get('/client-main', 'Client\MainController@clientMain');
Route::post('/client-top-key', 'Client\MainController@createRate');
Route::get('/client-my-prices', 'Client\MainController@myPrices');
Route::post('/client-update-key', 'Client\MainController@updateRate');
Route::post('/client-delete-key', 'Client\MainController@deleteRate');
Route::get('/client-profile', 'Client\MainController@clientProfile');
Route::post('/client-edit','Client\MainController@updateProfile');
//About Route.....
Route::get('/about', function () {
    return view('about');
});

